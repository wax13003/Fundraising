<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class signupController extends Controller
{
    //
    public function create(Request $request)
    {
    	$test = User::create([
	    	'name'=>$request->name,
	    	'email'=>$request->email,
	    	'password'=>bcrypt($request->password),
    		]);
    	return redirect('/');
    	
    }
}
