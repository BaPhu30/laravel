<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerLoginController extends Controller
{
    public function index()
    {   
        if (session()->get('user') != null) {
            return redirect()->route('index');
        };
        return view('buyer.login');
    }

    public function checkLogin()
    {
        return redirect()->route('index');
    }
}
