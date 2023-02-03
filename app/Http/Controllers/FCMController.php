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

      $users = DB::table('users')
        ->select([
          'users.id as user_id',
          'users.name',
          'users.email',
          'users.avatar',
          'users.device_token',
          DB::raw("IF(ISNULL(user_room.room_id)=1, -1, user_room.room_id) as room_id"),
        ])
        ->leftJoin('user_room', 'user_room.user_id', '=', 'users.id')
        ->where('users.id', '<>', $user_id)
        ->get();

      return response()->json([
        'success' => true,
        'message' => 'Get Chat Users Success.',
        'data' => $users
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

      $messages = DB::table('messenger')
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
      $fromUser = $params['fromUser'];
      $room_id= $params['room_id'];

      DB::table('messenger')->insert([
        'user_id' => $fromUser,
        'room_id' => $room_id,
        'text' => $text,
        'messenger_parent_id' => 0,
        'created_at' => Carbon::now()->toDateTimeString(),
      ]);

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
