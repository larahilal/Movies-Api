<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\users;

class EditController extends Controller
{
   

    public function edit_form(Request $request){

   		$movie_id = $request->movieId;

   		$movie = movies::where('id', $movie_id)->first();

   		return view('movies.edit_form', array('movie' => $movie));


    }

    public function update(Request $request){

    	$movie_id = $request->movieId;

    	$movie = movies::where('id', $movie_id)->first();

    	$movie->movie_title = $request->movie_title;

    	$movie->year_released = $request->year_released;

    	$movie->description = $request->description;

    	$movie->save();

    	echo "Movie updated";

    	return redirect('http://127.0.0.1:8000/my_account');

    }

    
}
