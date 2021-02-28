<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('frontend.home', compact('banners'));
    }

    public function category(){

        $categories=Category::orderBy('id','desc')->get();
        $banners = Banner::all();
        return view('frontend.category', compact('banners'))->with('categories',$categories);
    }
    public function product(){

        $products=Product::orderBy('id','desc')->get();
        $banners = Banner::all();
        return view('frontend.product',compact('banners'))->with('products',$products);
    }


}
