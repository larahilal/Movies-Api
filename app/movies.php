<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public function director(){

    	return $this->belongsTo('App\directors');

    }
}
