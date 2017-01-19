<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

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
}
