<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function captain(){
    	return $this->belongsTo('App\User');
    }

    public function players(){
    	return $this->belongsToMany('App\User' , 'team_user');
    }

    public function tournaments(){
        return $this->morphToMany('App\Tournament' , 'tournament', 'tournament_participant');
    }

    public function local_matches()
    {
        return $this->morphMany('App\Match', 'local');
    }

    public function away_matches()
    {
        return $this->morphMany('App\Match', 'away');
    }

    public function win_matches()
    {
        return $this->morphMany('App\Match', 'winner');
    }
}
