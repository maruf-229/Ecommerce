<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = DB::table('logos')->get();
        return view('backend.logo.index', compact('logos'));
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
//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
//        ]);
//        $logo = new Logo;
//        if($request->hasFile('image')){
//            $image              = $request->file('image');
//            $OriginalExtension  = $image->getClientOriginalExtension();
//            $image_name         = Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
//            $destinationPath    = 'images';
//            $resize_image       =Image::make($image->getRealPath());
//            $resize_image->resize(500, 500, function($constraint){
//                $constraint->aspectRatio();
//            });
//            $resize_image->save($destinationPath . '/' . $image_name);
//
//            $logo->image    = $image_name;
//        }
//        $logo->save();
//
//
//        return redirect()->route('admin.backend.logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo = Logo::where('id',$id)->first();
        return view('backend.logo.edit',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
        ]);

        $logo = Logo::find($id);
        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         = Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = 'images';
            $resize_image       =Image::make($image->getRealPath());
            $resize_image->resize(500, 500, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);

            $logo->image    = $image_name;
        }
        $logo->save();
        return redirect()->route('admin.backend.logo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $logo = Logo::where('id',$id)->first();

        if($logo != null){
            $logo->delete();
        }

        session()->flash('success','Product has deleted successfully !!');
        return back();
    }
}
