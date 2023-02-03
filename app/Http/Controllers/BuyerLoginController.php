<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\UserRole;

use Illuminate\Http\Request;

class BuyerLoginController extends Controller
{
    public function index()
    {
        if (session()->get('user') != null) {
            return redirect()->route('index');
        };
        return view('buyer.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|min:2|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);

        $UserEmail = Users::with('userRoles')->where('users.email', $request->email)->first();
        $UserName = Users::with('userRoles')->where('name', $request->email)->first();
        $UserPhone = Users::with('userRoles')->where('phone', $request->email)->first();
        
        if (isset($UserEmail)) {
            session(['user' => $UserEmail]);
            return redirect()->route('index');
        }
        if (isset($UserName)) {
            session(['user' => $UserName]);
            return redirect()->route('index');
        }
        if (!empty($UserPhone)) {
            session(['user' => $UserPhone]);
            return redirect()->route('index');
        }
    }
}
