<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\CategoryChild;

use Illuminate\Http\Request;

class CategoryChildController extends Controller
{
    public function index($id)
    {   
        $ShopeeMall = CategoryDad::all();
        $CategoryChild = CategoryChild::all();
        return view('category', compact('ShopeeMall', 'CategoryChild'));
    }
}
