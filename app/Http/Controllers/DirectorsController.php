<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\directors;

use App\movies;

use App\users;

use Illuminate\Support\Facades\Auth;

class DirectorsController extends Controller
{
    
    public function insert_movie_with_director_form(){


    	return view('movies.insert_movie_with_director');
    }


    public function insert_movie_with_new_director(Request $request){

    	$director = new directors;

    	$director->first_name = $request->first_name;

    	$director->last_name = $request->last_name;

    	$director->save();

    	$movie = new movies;

        $movie->movie_title = $request->movie_title;

        $movie->year_released = $request->year_released;

        $movie->description = $request->description;

        $movie->director_id = $director->id;

        $movie->users_id = Auth::user()->id;

        $movie->save();



    	echo "movie and director properly saved!";
	
	}

}
