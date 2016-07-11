<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchUserReport extends Model
{
	public function match(){
		return $this->belongsTo('App\Match');
	}

	public function winner(){
		return $this->morphTo();
	}
}
