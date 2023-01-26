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

  public function joinRoom(Request $req)
  {
    try {
      $input = $req->all();
      $user_id = $input['user_id'];
      $message = $input['message'];
      $to_user_id = $input['to_user_id'];
      $room_id = $input['room_id'];

      $isExist = DB::table('user_room')
      ->where('user_id', 65)
      ->exists();

      if ($isExist && $room_id) {
        DB::table('messenger')->insert([
          'user_id' => $user_id,
          'room_id' => $room_id,
          'text' => $message,
          'messenger_parent_id' => $user_id,
          'created_at' => Carbon::now()->toDateTimeString(),
        ]);
      } else {
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

          DB::table('messenger')->insert([
            'user_id' => $user_id,
            'room_id' => $newRoom->id,
            'text' => $message,
            'messenger_parent_id' => $user_id,
            'created_at' => Carbon::now()->toDateTimeString(),
          ]);
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
