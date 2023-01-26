<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\CategoryChild;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {       
        $CategoryDad = CategoryDad::paginate(4);
        $CategoryDad1 = CategoryDad::offset(0)->limit(13)->get(); 
        $CategoryDad2 = CategoryDad::offset(13)->limit(13)->get();
        $CategoryChild1 = CategoryDad::with('categoryChildren')->offset(0)->limit(5)->get();   
        $CategoryChild2 = CategoryDad::with('categoryChildren')->offset(5)->limit(6)->get();   
        $CategoryChild3 = CategoryDad::with('categoryChildren')->offset(11)->limit(5)->get();   
        $CategoryChild4 = CategoryDad::with('categoryChildren')->offset(16)->limit(5)->get();   
        $CategoryChild5 = CategoryDad::with('categoryChildren')->offset(21)->limit(5)->get();   

        $users = DB::table('users')->get();
        
        return view('index', compact(
          'CategoryDad',
          'CategoryDad1',
          'CategoryDad2', 
          'CategoryChild1', 
          'CategoryChild2', 
          'CategoryChild3', 
          'CategoryChild4', 
          'CategoryChild5',
          'users',
        ));
    }
}
