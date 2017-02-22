<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\actors;

use App\directors;

use Illuminate\Support\Facades\Auth;

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


        if (isset($movie)and count($movie)<1){

            echo "Sorry, this movie is not in our database";

            return redirect ('http://127.0.0.1:8000/');
        
        } else {

            return response()->json($movie);

        }

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

        if(Auth::check('laravel_session')){

        $directors = directors::all();
        
        return view('movies.insert_movie', array("directors" => $directors));

        } else {

            return redirect('http://127.0.0.1:8000');
        }
    }

    public function store_new_movie(Request $request){

        $movie = new movies;

        $movie->movie_title = $request->movie_title;

        $movie->year_released = $request->year_released;

        $movie->description = $request->description;

        $movie->director_id = $request->director_id;

        $movie->users_id = Auth::user()->id;

        $movie->save();
        
        echo "Movie inserted!";

    }
}
