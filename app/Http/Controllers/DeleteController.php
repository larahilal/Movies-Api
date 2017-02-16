<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\users;

class DeleteController extends Controller
{
    public function delete(Request $request){

		$movie_id = $request->movieId;

		movies::destroy($movie_id);

		echo "Movie deleted!";

		
    	
    }
}
