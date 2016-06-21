<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    public function games(){

		return $this->hasMany('App\Game');

}

public function rounds(){

		return $this->belongsTo('App\Round');

}

}
