<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('sess');
    }
    public function index(Request $request)
    {
    	return view('home.index');
    }
}
