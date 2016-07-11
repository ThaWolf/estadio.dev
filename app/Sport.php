<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $table = 'sport';

    public function tournaments(){
    	return $this->hasMany('App\Tournament');
    }
}
