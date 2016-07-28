<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportPlayer extends Model
{
    use Traits\HasCompositePrimaryKey;

	protected $primaryKey = array('sport_id', 'user_id');
	protected $table = 'sport_player';

	/**
     * Scope a query to only include teams for the sport
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForSport($query, $sport)
    {
        return $query->where('sport_id', $sport->id);
    }

    public function sport(){
		return $this->belongsTo('App\Sport', 'sport_id');
	}

	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}

}
