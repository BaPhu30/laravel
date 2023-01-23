<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryDadTableController extends Controller
{

    public function index()
    {
        $Category = CategoryDad::paginate(6);
        return view('admin.category-dad-table', compact('Category'));
    }
}
