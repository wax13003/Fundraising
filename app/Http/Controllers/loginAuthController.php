<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class loginAuthController extends Controller
{
    //

    public function doLogin(Request $request){
    	$userData = array(
    		'email' => $request->email,
    		'password' => $request->password,
    	);
    	if(Auth::attempt($userData)){
    		return redirect('/');
    	}else{
    		return redirect('/login')
    			->withErrors('wrong password');
    	}
	}
	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}
