<?php

namespace App\Http\Controllers;

use App\Models\BillInfo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBillInfoTableController extends Controller
{

    public function index()
    {
        $Product = BillInfo::paginate(6);
        return view('admin.product-table', compact('Product'));
    }
}
