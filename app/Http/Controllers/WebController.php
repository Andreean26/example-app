<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    function index(Request $request)
    {
        return view('welcome');
    }
}
