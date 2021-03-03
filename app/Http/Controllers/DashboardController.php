<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardPage(){
        $products=Product::orderBy('id','desc')->get();
        return view('backend.dashboard',compact('products'));
    }

}
