<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class directors extends Model
{
    public function movie(){

    	return $this->hasMany('App\movies');

    }
}
