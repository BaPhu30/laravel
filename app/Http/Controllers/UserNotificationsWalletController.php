<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserNotificationsWalletController extends Controller
{
    public function index()
    {
        $CategoryDad = CategoryDad::all();
        return view('user.notifications.wallet', compact('CategoryDad'));
    }
}
