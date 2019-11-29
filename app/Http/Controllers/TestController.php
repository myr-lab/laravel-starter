<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
    	//Logic developed
    	return view("frontend.index");
    }
}
