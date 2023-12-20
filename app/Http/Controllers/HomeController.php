<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function Index(){
        $allproducts = Product::latest()->get();
        return view('user_template.home', compact('allproducts'));
    }
}
