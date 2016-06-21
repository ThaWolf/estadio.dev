<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    //
    protected $fillable = [
    	'nombre','descripcion','formato','limite'

    ];

public function user(){

		return $this->belongsToMany('App\User' , 'torneos_users');

}

public function rounds(){

		return $this->hasMany('App\Round');

}

    
}
