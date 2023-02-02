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

      $isExistUserFrom = DB::table('user_room')
        ->where('user_id', $user_id)
        ->exists();

      $isExistUserTo = DB::table('user_room')
        ->where('user_id', $to_user_id)
        ->exists();

      if ($isExistUserFrom && $isExistUserTo) {
        // người gửi, người nhận đã có room

        return response()->json([
          'success' => true,
          'message' => 'Get New Message Success.',
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
        }

        return response()->json([
          'success' => true,
          'message' => 'Create Chat Success.'
        ]);
      }
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => 'error'
      ]);
    }
  }

  public function sendMessage(Request $req)
  {
  }
}
