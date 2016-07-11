<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchUserReport extends Model
{
	use Traits\HasCompositePrimaryKey;

	protected $primaryKey = array('match_id', 'participant');
	
	public function match(){
		return $this->belongsTo('App\Match');
	}

	public function winner(){
		return $this->morphTo();
	}
}
