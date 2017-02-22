<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\users;

use App\movies;

class AccountController extends Controller
{
    
    public function my_account(){

    if(Auth::check('laravel_session')){	

    		$user = Auth::user();

    		$movies = $user->movies;

    		return view('user.my_account', compact('movies'));	
    	
    	} else {

    		return redirect ('http://127.0.0.1:8000');

    	}
    }

    public function myHome(){

    	if(Auth::check('laravel_session')){

    	return view('loggedinHome');

    	} else {

    		return redirect ('http://127.0.0.1:8000');
    	}

    }
}
