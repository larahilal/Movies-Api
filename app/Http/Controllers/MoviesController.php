<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\actors;

use App\directors;

class MoviesController extends Controller
{
    
    public function index(){

    	$movies = movies::all();

    	return view('movies.index', compact('movies'));

    }

    public function find_movie(Request $request)
    {
        $title = $request->input('movie_title');

        $movie=movies::where('movie_title', $title)->with('director')->get();

        return response()->json($movie); 



    }

    public function display_movie_info(){

    	$actors = actors::with('movies')->get();

    	$movies = array();

    	foreach ($actors as $actor) {
    		
    		$movies[] = $actor->movies;

    	}

    	return response()->json($movies);

    }

    public function insert_movie_form(){

        $directors = directors::all();
        
        return view('movies.insert_movie', array("directors" => $directors));

    }

    public function store_new_movie(Request $request){

        $movie = new movies;

        $movie->movie_title = $request->movie_title;

        $movie->year_released = $request->year_released;

        $movie->description = $request->description;

        $movie->save();



        $directors = directors::all();


        foreach ($directors AS $director) {

            if ( ($request->first_name == $director->first_name) and ($request->last_name==$director->last_name) ) {

                echo "director already in database"
            } else {

                $director = new directors;

                $director->first_name = $request->first_name;

                $director->last_name = $request->last_name;

                $director->save();

            }
        }

        echo "Movie inserted!";

    }
}
