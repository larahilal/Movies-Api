<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{

	public $timestamps = false;
	
    public function director(){

    	return $this->belongsTo('App\directors');

    }

    public function actors(){

    	return $this->belongsToMany('App\actors','actors_movies','movie_id,actor_id');

    }

    public function users(){

    	return $this->belongsTo('App\users');
    }

}
