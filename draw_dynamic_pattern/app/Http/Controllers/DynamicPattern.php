<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPattern extends Controller
{
    function index()
    {
    	return view('draw_dynamic_pattern');
    }
}
