<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Room;
use App\Models\UserRoom;
use App\Models\Messenger;

class FCMController extends Controller
{
  public function getChatUsers(Request $req)
  {
    try {
      $params = $req->all();
      $user_id = $params['user_id'];

      $tempElseRoom = DB::unprepared(
        DB::raw("CREATE TEMPORARY TABLE t_else_room AS (
          SELECT * FROM user_room WHERE user_id <> $user_id
          );")
      );

      $tempMyRoom = DB::unprepared(
        DB::raw("CREATE TEMPORARY TABLE t_my_room AS (
          SELECT * FROM user_room WHERE user_id = $user_id
          );")
      );

      $tempShareRoom = DB::unprepared(
        DB::raw("CREATE TEMPORARY TABLE t_share_room AS (
          SELECT 
            t_else_room.user_id,
            t_my_room.room_id
          FROM t_else_room 
          JOIN t_my_room ON t_my_room.room_id = t_else_room.room_id
          );")
      );

      if (
        $tempElseRoom &&
        $tempMyRoom &&
        $tempShareRoom
      ) {
        $shareRoom = DB::table('t_share_room')
          ->get();

        $newMessageID = DB::table('messenger')
          ->select(DB::raw('MAX(id) as new_message_id'))
          ->where([
            ['room_id', '=', $shareRoom[0]->room_id],
            ['user_id', '<>', $user_id]
          ])
          ->get();

        $newMessageIDNumber = $newMessageID[0]->new_message_id;

        $tempNewMessage = DB::unprepared(
          DB::raw("CREATE TEMPORARY TABLE t_new_massage AS (
              SELECT * 
              FROM messenger 
              WHERE id = $newMessageIDNumber
              );")
        );

        if($tempNewMessage){
          $users = DB::table('users')
          ->select([
            'users.id as user_id',
            'users.name',
            'users.email',
            'users.avatar',
            'users.device_token',
            DB::raw("IF(ISNULL(t_share_room.room_id)=1, -1, t_share_room.room_id) as room_id"),
            't_new_massage.text',
            DB::raw("TIME_FORMAT(t_new_massage.created_at, '%H:%i') as text_created_at")
          ])
          ->leftJoin('t_share_room', 't_share_room.user_id', '=', 'users.id')
          ->leftJoin('t_new_massage', 't_new_massage.room_id', '=', 't_share_room.room_id')
          ->where('users.id', '<>', $user_id)
          ->get();
        }
      }

      return response()->json([
        'success' => true,
        'message' => 'Get Chat Users Success.',
        'data' => $users,
      ]);
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => 'Get Chat Users Fail.',
        'data' => []
      ]);
    }
  }

  // cập nhật lại fcm token sau khi có user login vào
  public function updateToken(Request $req)
  {
    $input = $req->all();
    $device_token = $input['device_token'];
    $user_id = $input['user_id'];

    $user = User::findOrFail($user_id);
    $user->device_token = $device_token;
    $user->save();

    return response()->json([
      'success' => true,
      'message' => 'User token updated successfully.'
    ]);
  }

  // xoá token khi user logout
  public function clearToken(Request $req)
  {
    $input = $req->all();
    $user_id = $input['user_id'];

    $user = User::findOrFail($user_id);
    $user->device_token = "";
    $user->save();

    return response()->json([
      'success' => true,
      'message' => 'User token clear successfully.'
    ]);
  }

  public function getNotification()
  {
  }

  // TODO:
  public function sendNotification(Request $req)
  {
  }

  public function createChat(Request $req)
  {
    try {
      $params = $req->all();
      $fromUser = $params['fromUser'];
      $toUser = $params['toUser'];

      // create table temp
      $tempFromUser = DB::unprepared(
        DB::raw("CREATE TEMPORARY TABLE table_temp_from_user AS (SELECT * FROM user_room WHERE user_id = $fromUser);")
      );

      $tempToUser = DB::unprepared(
        DB::raw("CREATE TEMPORARY TABLE table_temp_to_user AS (SELECT * FROM user_room WHERE user_id = $toUser);")
      );

      if (
        $tempFromUser &&
        $tempToUser
      ) {
        $userRoom = DB::table('table_temp_to_user')
          ->join('table_temp_from_user', 'table_temp_from_user.room_id', '=', 'table_temp_to_user.room_id')
          ->get();

        if ($userRoom->count() > 0) {
          return response()->json([
            'success' => true,
            'message' => 'Chat Exist.',
            'data' => [
              'room_id' => $userRoom[0]->room_id
            ]
          ]);
        } else {
          // người gửi, người nhận chưa có room
          $isCreateRoom =  DB::table('room')
            ->insert([
              'created_at' => Carbon::now()->toDateTimeString(),
            ]);

          if ($isCreateRoom) {
            $newRoom =  DB::table('room')
              ->latest('created_at')
              ->first();

            // add record user gửi
            DB::table('user_room')->insert([
              'user_id' => $fromUser,
              'room_id' => $newRoom->id,
              'created_at' => Carbon::now()->toDateTimeString(),
            ]);

            // add record user nhận
            DB::table('user_room')->insert([
              'user_id' => $toUser,
              'room_id' => $newRoom->id,
              'created_at' => Carbon::now()->toDateTimeString(),
            ]);
          }

          return response()->json([
            'success' => true,
            'message' => 'Create Chat Success.',
            'data' => [
              'room_id' => $newRoom->id
            ]
          ]);
        }
      }
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => 'Create Chat Fail.',
        'data' => []
      ]);
    }
  }

  public function joinChat(Request $req)
  {
    try {
      $params = $req->all();
      $room_id = $params['room_id'];
      $fromUser = $params['fromUser'];
      $toUser = $params['toUser'];

      $messages = DB::table('messenger')
        ->whereIn('user_id', array($fromUser, $toUser))
        ->where('room_id', $room_id)
        ->get();

      return response()->json([
        'success' => true,
        'message' => 'Join Chat Success.',
        'data' => $messages
      ]);
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => 'Join Chat Fail.',
        'data' => []
      ]);
    }
  }

  public function getMessage()
  {
  }

  public function sendMessage(Request $req)
  {
    try {
      $params = $req->all();
      $text = $params['text'];
      $from_user = $params['fromUser'];
      $room_id = $params['room_id'];
      $to_user = $params['toUser'];

      $fromUser = DB::table('users')
        ->where('id', $from_user)
        ->get();

      $toUser = DB::table('users')
        ->where('id', $to_user)
        ->get();

      DB::table('messenger')->insert([
        'user_id' => $from_user,
        'room_id' => $room_id,
        'text' => $text,
        'messenger_parent_id' => 0,
        'created_at' => Carbon::now()->toDateTimeString(),
      ]);

      $CLOUD_SERVER_KEY = env('CLOUD_SERVER_KEY');

      $data = [
        "to" => $toUser[0]->device_token,
        "notification" => [
          "title" => $fromUser[0]->name,
          "body" => $text,
        ],
        "data" => [
          "user_id" => $toUser[0]->id,
        ]
      ];
      $dataString = json_encode($data);

      $headers = [
        'Authorization: key=' . $CLOUD_SERVER_KEY,
        'Content-Type: application/json',
      ];

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

      curl_exec($ch);
      curl_close($ch);

      return response()->json([
        'success' => true,
        'message' => 'Send Message Success.',
      ]);
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => 'Send Message Fail.',
      ]);
    }
  }
}
