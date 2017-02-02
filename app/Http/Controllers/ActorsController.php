<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\actors;

class ActorsController extends Controller
{
    
    public function display_actor_info(){

    	$actors = actors::with('movies')->get();

    	$actors_array = array();

    	foreach ($actors as $actor){

    		$actors_array[] = $actor;

    	}

    	return response()->json($actors_array);

    }
    
}
