<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
    	return view('cart.index');
    }

    public function add($id)
    {
    	// add product to cart from url id
    	// create a cart session
    	// when product added to db destroy cart session
    	
    	return view('cart.index');
    }
}
