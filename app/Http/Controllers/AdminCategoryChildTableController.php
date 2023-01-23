<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\CategoryChild;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryChildTableController extends Controller
{

    public function index()
    {
        $Category = CategoryChild::paginate(6);
        return view('admin.category-child-table', compact('Category'));
    }
}
