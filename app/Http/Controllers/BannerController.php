<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerImages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $banners= Banner::orderBy('id','desc')->get();
        return view('backend.banner.index')->with('banners',$banners);
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
     * @return \Illuminate\Http\Response
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

        $banner->save();

        if (count($request->banner_image) > 0) {

            foreach ($request->banner_image as $image) {

                // $image=$request->file('product_image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $img);
                Image::make($image)->save($location);

                $banner_image = new BannerImages;
                $banner_image->banner_id = $banner->id;
                $banner_image->image = $img;
                $banner_image->save();
            }
        }

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
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
