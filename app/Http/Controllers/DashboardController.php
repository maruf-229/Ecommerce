<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardPage(){
        $categories=Category::orderBy('id','desc')->get();
        return view('backend.dashboard')->with('categories',$categories);
    }

}
