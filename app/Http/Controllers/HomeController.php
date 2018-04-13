<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('sess');
    }

    public function index(Request $request)
    {
    	$products = DB::table('products')
    		->get();

		$categories = DB::table('categories')
			->get();

    	return view('home.index', ['products' => $products, 'categories' => $categories]);
    }

    public function search(Request $request)
    {
    	$products = Product::where('productName', 'LIKE', "%$request->searchText%")
			->get();

		$categories = DB::table('categories')
			->get();

		return view('home.index', ['products' => $products, 'categories' => $categories]);
    }
}
