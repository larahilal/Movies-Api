<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

use App\movies;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function register(){

    	return view('user.registration_form');

    }

    public function store_user(Request $request){

    	$user = new users;

    	$user->first_name = $request->first_name;

    	$user->last_name = $request->last_name;

    	$user->email = $request->email;

    	$user->password = $request->password;

    	$user->save();

    	return redirect('insert_movie_form');

    }

    public function login_form(){

    	return view ('auth.login');

    }

    public function authenticate(){

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect('movies');
        }

    }

}
