<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\users;

class EditController extends Controller
{
    public function retrieve_to_edit(){


    	return view('movies.retrieve_to_edit');


    }

    public function edit_form(Request $request){

    	$movie = $request->input('movie_title');

    	return view('edit_form');

    }

    public function edit(Request $request){

    	


    }

    
}
