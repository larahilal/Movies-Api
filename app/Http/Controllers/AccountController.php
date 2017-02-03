<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\users;

use App\movies;

class AccountController extends Controller
{
    
    public function my_account(){

    	$user = Auth::user();

    	$movies = $user->movies;

    	return view('user.my_account', compact('movies'));

    	

    }
}
