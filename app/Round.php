<?php

namespace App;

use DateTime;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
	protected $table = 'round';

    public function matches(){
		return $this->hasMany('App\Match');
	}

	public function tournament(){
		return $this->belongsTo('App\Tournament');
	}

	public function endDateTime(){
		return new DateTime($this->end_time);
	}

	public function canResolve(DateTime $currentDate){
		if($this->endDateTime() > $currentDate){
			return false;
		}
		return ($this->status != 'Finished');
	}

}
