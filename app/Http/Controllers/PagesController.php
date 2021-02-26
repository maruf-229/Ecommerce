<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function category(){

        $categories=Category::orderBy('id','desc')->get();
        return view('frontend.category')->with('categories',$categories);
    }
    public function product(){

        $products=Product::orderBy('id','desc')->get();
        return view('frontend.product')->with('products',$products);
    }


}
