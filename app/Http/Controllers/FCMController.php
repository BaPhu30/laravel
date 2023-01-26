<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class FCMController extends Controller
{
    //
    public function index(Request $req){
      $input = $req->all();
      $device_token = $input['device_token'];
      $user_id = $input['user_id'];

      $user = User::findOrFail($user_id);
      $user->device_token = $device_token;
      $user->save();
  
      return response()->json([
          'success'=>true,
          'message'=>'User token updated successfully.'
      ]);
    }
}
