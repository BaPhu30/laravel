<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPurchaseController extends Controller
{
    public function index()
    {
        $CategoryDad = CategoryDad::all();
        return view('user.purchase', compact('CategoryDad'));
    }
}
