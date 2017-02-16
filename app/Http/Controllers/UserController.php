<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

use App\movies;
use Illuminate\Support\Facades\Hash;
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

    	$user->password = Hash::make($request->password);

    	$user->save();

    	return redirect('insert_movie_form');

    }

    public function login_form(){

        if(Auth::check('laravel_session')){

            return redirect('http://127.0.0.1:8000/insert_movie_form');
        }

    	return view ('auth.login');

    }

    public function authenticate(Request $request){

    	if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {

        //die('work');

            return redirect('http://127.0.0.1:8000/movies');
        }

        die('did not work');

    }

}
