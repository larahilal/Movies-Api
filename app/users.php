<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

use App\movies;

class users extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    
    public function movies(){

        return $this->hasMany('App\movies');

    }
}