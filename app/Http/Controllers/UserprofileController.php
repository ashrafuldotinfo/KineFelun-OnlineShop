<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserprofileController extends Controller
{
    public function show(Request $request)
    {
    	if($request->session()->has('user'))
    	{
    		return view('userprofile.index');
    			
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('userprofile.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
    	$u = User::find($id);
    	$u->username = $request->username;
    	$u->email = $request->email;
    	$u->save();
    	return redirect('/logout');
    }
}
