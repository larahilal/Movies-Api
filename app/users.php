<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\movies;

class users extends Model
{
    public $timestamps = false;
    
    public function movies(){

        return $this->hasMany('App\movies');

    }
}
