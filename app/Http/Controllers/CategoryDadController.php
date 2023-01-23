<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\CategoryChild;

use Illuminate\Http\Request;

class CategoryDadController extends Controller
{
    public function index($id)
    {   
        $ShopeeMall = CategoryChild::with('products')
        ->join('shop', 'shop.user_id', '=', 'users.id')
        ->where('category_child.category_dad_id', '=', $id)
        ->get('shop.avatar');   
        $CategoryChild = CategoryChild::all();
        return view('category', compact('ShopeeMall', 'CategoryChild'));
    }
}
