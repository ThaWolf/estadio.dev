<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class round extends Model
{
	protected $fillable = [
	'name'
	];

    public function matches(){

		return $this->hasMany('App\Match');

}

public function torneos(){

		return $this->belongsTo('App\Torneo');

}

public function pools(){

		return $this->hasOne('App\Pool');

}

}
