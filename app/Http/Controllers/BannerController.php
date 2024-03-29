<?php

namespace App\Http\Controllers;


use App\Models\Banner;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use Validator;

class BannerController extends Controller
{


    public function index()
    {
        $banners = DB::table('banners')->get();
//       $banners = Banner::orderBy('id', 'desc')->get();
//        $banners = Banner::where('id', '!=', 0)->orderBy('id', 'desc')->get();

//        $banners = Banner::orderBy('id', '!=', 0)->get();
//        dd($banners);
       return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',

        ]);


        $banner = new Banner;
        $banner->title = $request->title;
        $banner->description = $request->description;


        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         = Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = 'images';
            $resize_image       =Image::make($image->getRealPath());
//            $resize_image->resize(500, 500, function($constraint){
//                $constraint->aspectRatio();
//            });
            $resize_image->save($destinationPath . '/' . $image_name);

            $banner->image    = $image_name;
        }

        $banner->save();

        return redirect()->route('admin.backend.banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Banner $banner , $id)
    {
     //echo 'ami dekhte chai ei function porjonto hit ase kina !';

        $banner = Banner::where('id',$id)->first();
        return view('backend.banner.edit' , compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $banner = Banner::where('id',$id)->first();
        $banner->title = $request-> title;
        $banner->description = $request-> description;



        $banner->save();

        return redirect()->route('admin.backend.banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete(Banner $banner , $id)
    {
//
       $banner = Banner::find($id);

      if(!is_null($banner)){
           $banner->delete();
       }
      session()->flash('success','Product has deleted successfully !!');
       return back();
  }
}
