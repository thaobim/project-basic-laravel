<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function getOrder(){
        $_SESSION["current_page"] = "order";
        return view('backend\order\order');
    }
    function getDetailOrder(){
        return view('backend\order\detailorder');
    }
    function getProcessedOrder(){
        return view('backend\order\processed');
    }
}
