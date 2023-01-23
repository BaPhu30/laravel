<?php

namespace App\Http\Controllers;

use App\Models\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminShopTableController extends Controller
{

    public function index()
    {
        $Shops = Shop::paginate(6);
        return view('admin.shop-table', compact('Shops'));
    }
}
