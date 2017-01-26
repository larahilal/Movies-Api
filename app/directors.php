<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class directors extends Model
{
	public $timestamps = false;
	
    public function movie(){

    	return $this->hasMany('App\movies');

    }
}
