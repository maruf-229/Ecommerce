<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('id','desc')->get();
        return view('backend.category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        //Product image model insert image

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $request->image->move(public_path('images-1.category') .$filename);
            $category->image=$filename;
        }
        else{
            return $request;
            $category->image='';
        }
        $category->save();


        return redirect()->route('admin.backend.category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $category = Category::find($id);
        return view('backend.category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category , $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;



        $category->save();

        return redirect()->route('admin.backend.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $category = Category::find($id);

        if(!is_null($category)){
            $category->delete();
        }

        session()->flash('success','Product has deleted successfully !!');
        return back();
    }

}
