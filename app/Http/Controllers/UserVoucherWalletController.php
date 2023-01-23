<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserVoucherWalletController extends Controller
{
    public function index()
    {
        $CategoryDad = CategoryDad::all();
        return view('user.voucher-wallet', compact('CategoryDad'));
    }
}
