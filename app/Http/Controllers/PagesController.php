<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\Logo;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.home', compact('banners','logos' ,'contact_infos'));
    }

    public function category(){

        $categories=Category::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.category', compact('banners','logos' ,'contact_infos'))->with('categories',$categories);
    }
    public function product(){

        $products=Product::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.product',compact('banners','logos','contact_infos'))->with('products',$products);
    }


}
