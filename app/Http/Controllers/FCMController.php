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

  // TODO:
  public function sendNotification(Request $req)
  {
  }

  public function joinChat(Request $req)
  {
    try {
      $body = $req->all();
      $user_id = $body['user_id'];
      $to_user_id = $body['to_user_id'];
      // $room_id = $body['room_id'];

      $isExist = DB::table('user_room')
      ->where('user_id', $user_id)
      ->exists();

      if ($isExist) {
        // nếu đã có room rồi thì check xem room đó có người chat chưa
        $isExistToUser = DB::table('user_room')
        ->where('user_id', $to_user_id)
        ->exists();

        if($isExistToUser){
          // // có rồi thì get thông tin mới nhất của room
          // $messages = DB::table('messenger')
          //   ->where('room_id', $room_id)
          //   ->get();

          //   return response()->json([
          //     'success' => true,
          //     'message' => 'User join chat successfully.',
          //     'data' => $messages
          //   ]);
        }else{
          // // chưa có thì tạo room mới
          // $isCreateRoom =  DB::table('room')
          // ->insert([
          //   'created_at' => Carbon::now()->toDateTimeString(),
          // ]);

          // if ($isCreateRoom) {
          //   $newRoom =  DB::table('room')
          //   ->latest('created_at')
          //   ->first();
  
          //   // add record user gửi
          //   DB::table('user_room')->insert([
          //     'user_id' => $user_id,
          //     'room_id' => $newRoom->id,
          //     'created_at' => Carbon::now()->toDateTimeString(),
          //   ]);
  
          //   // add record user nhận
          //   DB::table('user_room')->insert([
          //     'user_id' => $to_user_id,
          //     'room_id' => $newRoom->id,
          //     'created_at' => Carbon::now()->toDateTimeString(),
          //   ]);

          //   $messages = DB::table('messenger')
          //   ->where('room_id', $newRoom->id)
          //   ->get();

          //   return response()->json([
          //     'success' => true,
          //     'message' => 'User join chat successfully.',
          //     'data' => $messages
          //   ]);
          // }
        }
      } else {
        // user chưa có room thì tạo room mới
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
            'user_id' => $user_id,
            'room_id' => $newRoom->id,
            'created_at' => Carbon::now()->toDateTimeString(),
          ]);

          // add record user nhận
          DB::table('user_room')->insert([
            'user_id' => $to_user_id,
            'room_id' => $newRoom->id,
            'created_at' => Carbon::now()->toDateTimeString(),
          ]);

          return response()->json([
            'success' => true,
            'message' => 'User create chat successfully.',
          ]);
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
      return response()->json([
        'success' => false,
        'message' => $th
      ]);
    }
  }

  public function sendMessage(Request $req){

  }
}
