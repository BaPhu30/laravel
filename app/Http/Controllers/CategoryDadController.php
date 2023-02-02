<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\CategoryChild;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoryDadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ShopeeMall1 = DB::table('category_dad')
        ->join('category_child','category_child.category_dad_id','=','category_dad.id')
        ->join('product','product.category_child_id','=','category_child.id')
        ->join('shop','shop.id','=','product.shop_id')
        ->select('category_dad.id', 'shop.avatar')
        ->where('category_dad.id', $id)
        ->skip(0)->take(12)
        ->get();
        $ShopeeMall2 = DB::table('category_dad')
        ->join('category_child','category_child.category_dad_id','=','category_dad.id')
        ->join('product','product.category_child_id','=','category_child.id')
        ->join('shop','shop.id','=','product.shop_id')
        ->select('category_dad.id', 'shop.avatar')
        ->where('category_dad.id', $id)
        ->skip(12)->take(11)
        ->get();
        $CategoryDad = CategoryDad::with('categoryChildren')->where('id', $id)->get();
        $Products = CategoryChild::with('categoryDad')->with('products')->where('category_dad_id', $id)->get();
        return view('category-dad', compact('ShopeeMall1', 'ShopeeMall2', 'CategoryDad', 'Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
