<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
    
    public function movies(){

    	return $this->belongsToMany('App\movies','actors_movies','actor_id','movie_id');

    }
}
