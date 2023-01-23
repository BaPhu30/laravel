<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Users;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class BuyerRegisterController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Users = Users::all();
        return view('buyer.register', compact('Users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:7|max:255|unique:users',
            'password' => 'required|string|min:6|max:255',
        ]);

        $Users = new Users();

        // Name
        $name = Str::random(10);
        $name = time() . '_' . $name;
        // Password
        $password = Hash::make($request->password);
        // Avatar
        $avatar = 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png';
        // Male
        $male = '1';
        
        $Users->name = $name;
        $Users->email = $request->email;
        $Users->password = $password;
        $Users->avatar = $avatar;
        $Users->male = $male;
        $Users->save();
        $Users::find($request->email);
        
        $data['users_id'] = $Users->id;
        $data['role_id'] = 2;
        UserRole::create($data);

        return redirect()->route('buyer.login')->with('success', 'Bạn đã đăng ký tài khoản thành công!');
    }
}
