<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductTableController extends Controller
{

    public function index()
    {
        $Product = Product::paginate(6);
        return view('admin.product-table', compact('Product'));
    }
}
