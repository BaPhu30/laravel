<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;
use App\Models\Product;

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
    
    $FlashSales = Product::inRandomOrder()
    ->skip(0)->take(16)
    ->get();

    $ShopeeMall1 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(0)->take(2)
    ->get();
    $ShopeeMall2 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(2)->take(2)
    ->get();
    $ShopeeMall3 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(4)->take(2)
    ->get();
    $ShopeeMall4 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(6)->take(2)
    ->get();
    $ShopeeMall5 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(8)->take(2)
    ->get();
    $ShopeeMall6 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(10)->take(2)
    ->get();
    $ShopeeMall7 = DB::table('shop')
    ->join('product','product.shop_id','=','shop.id')
    ->skip(12)->take(1)
    ->get();

    $TopSearchs = Product::inRandomOrder()
    ->skip(0)->take(21)
    ->get();

    $Suggestions = Product::with('categoryChild')->inRandomOrder()
    ->skip(0)->take(48)
    ->get();

    return view('index', compact(
      'CategoryDad',
      'CategoryDad1',
      'CategoryDad2',
      'CategoryChild1',
      'CategoryChild2',
      'CategoryChild3',
      'CategoryChild4',
      'CategoryChild5',
      'FlashSales',
      'ShopeeMall1',
      'ShopeeMall2',
      'ShopeeMall3',
      'ShopeeMall4',
      'ShopeeMall5',
      'ShopeeMall6',
      'ShopeeMall7',
      'TopSearchs',
      'Suggestions',
    ));
  }
}
