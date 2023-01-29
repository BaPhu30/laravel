<?php

namespace App\Http\Controllers;

use App\Models\CategoryDad;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryDadTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = CategoryDad::paginate(6);
        return view('admin.category-dad-table', compact('Category'));
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
        $request->validate([
            'name' => 'required|string|max:255|unique:category_dad',
        ]);

        $data = $request->all();
        // img
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/product/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $img = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
        }
        $data['img'] = $img;
        CategoryDad::create($data);
        return redirect()->route('admin.category-dad-table');
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
            'name' => 'required|string|max:255|unique:category_dad',
        ]);

        // img
        $img = $request->imageOld;
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/categorydad/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $img = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
        }

        // Update 
        $CategoryDad = new CategoryDad();
        $CategoryDad = CategoryDad::find($id);
        $CategoryDad->name = $request->name;
        $CategoryDad->img = $img;
        $CategoryDad->update();
        return response()->json(
            [
                'CategoryDad' => $CategoryDad,
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
        $CategoryDad = CategoryDad::find($id);
        $CategoryDad->delete();
    }
}
