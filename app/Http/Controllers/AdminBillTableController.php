<?php

namespace App\Http\Controllers;

use App\Models\Bill;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBillTableController extends Controller
{

    public function index()
    {
        $Product = Bill::paginate(6);
        return view('admin.product-table', compact('Product'));
    }
}
