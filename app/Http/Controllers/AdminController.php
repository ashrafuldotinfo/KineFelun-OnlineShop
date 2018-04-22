<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	$user = DB::table('users')
    		->where('id', '10')
    		->first();

    	return view('admin.index', ['user' => $user]);
    }
}
