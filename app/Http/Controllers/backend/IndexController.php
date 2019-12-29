<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getIndex(){
        $_SESSION["current_page"] = "admin";
        return view('backend\index');
    }
}
