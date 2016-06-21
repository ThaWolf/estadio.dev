<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    public function rounds(){

		return $this->belongsTo('App\Round');

}

public function users(){

return $this->belongsToMany('App\User');

}   

}