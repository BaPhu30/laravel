<?php

namespace App\Http\Controllers;

use App\Models\CategoryChild;
use App\Models\CategoryDad;

use Illuminate\Http\Request;

class AdminCategoryChildTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoriesChild = CategoryChild::with('categoryDad')->paginate(6);
        $CategoriesDad = CategoryDad::get();
        return view('admin.category-child-table', compact('CategoriesChild', 'CategoriesDad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoryDads = CategoryDad::get();
        return view('admin.category-child-table-insert', compact('CategoryDads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:category_child',
        ]);

        $data = $request->all();
        CategoryChild::create($data);
        return redirect()->route('admin.category-child-table');
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
        $request->validate([
            'name' => 'required|string|max:255|unique:category_child',
        ]);

        // Update 
        $CategoryChild = new CategoryChild();
        $CategoryChild = CategoryChild::find($id);
        $CategoryChild->name = $request->name;
        $CategoryChild->category_dad_id = $request->idCategoryDad;
        $CategoryChild->update();

        $CategoryChild = CategoryChild::with('categoryDad')->find($id);
        return response()->json(
            [
                'CategoryChild' => $CategoryChild,
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete
        $CategoryChild = CategoryChild::find($id);
        $CategoryChild->delete();
    }
}
