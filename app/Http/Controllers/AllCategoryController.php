<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllCategoryController extends Controller
{

    public function index()
    {
        $CategoryDad = CategoryDad::with('categoryChildren')->orderBy('category_dad.name')->get();   
        $CategoryDadB = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'B%')->get();
        $CategoryDadC = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'C%')->get();
        $CategoryDadD = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'Đ%')->get();
        $CategoryDadG = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'G%')->get();
        $CategoryDadM = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'M%')->get();
        $CategoryDadN = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'N%')->get();
        $CategoryDadO = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'Ô%')->get();
        $CategoryDadP = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'P%')->get();
        $CategoryDadS = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'S%')->get();
        $CategoryDadT = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'T%')->get();
        $CategoryDadV = CategoryDad::with('categoryChildren')->where('category_dad.name', 'like', 'V%')->get();
        return view('all-category', compact('CategoryDad', 'CategoryDadB', 'CategoryDadC', 'CategoryDadD', 'CategoryDadG', 'CategoryDadM', 'CategoryDadN', 'CategoryDadO', 'CategoryDadP', 'CategoryDadS', 'CategoryDadT', 'CategoryDadV'));
    }
}
