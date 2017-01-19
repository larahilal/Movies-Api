<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

use App\actors;

class ActorsController extends Controller
{
    
    public function display_actor_info(){

    	$actors = actors::all();

    	foreach ($actors as $actor){

    		return response()->json($actor);

    	}


    }
}
