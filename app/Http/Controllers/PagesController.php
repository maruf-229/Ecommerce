<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $banners = Banner::all();
        $logos = Logo::all();
        return view('frontend.home', compact('banners','logos'));
    }

    public function category(){

        $categories=Category::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        return view('frontend.category', compact('banners','logos'))->with('categories',$categories);
    }
    public function product(){

        $products=Product::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        return view('frontend.product',compact('banners','logos'))->with('products',$products);
    }


}
