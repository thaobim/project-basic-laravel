<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProduct(){
        return view('frontend\product\shop');
    }
    function getDetailProduct(){
        return view('frontend\product\detail');
    }
}
