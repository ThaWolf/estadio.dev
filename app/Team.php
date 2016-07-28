<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     /**
     * Scope a query to only include teams for the sport
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForSport($query, $sport)
    {
        return $query->where('sport_id', $sport->id);
    }
    
    /**
     * Scope a query to only include teams where the user is ower or captain
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForUser($query, $user){
        return $query->where('owner_id', $user->id)
            ->orWhere('captain_id', $user->id);
    }

    public function sport(){
        return $this->belongsTo('App\Sport');
    }

    public function captain(){
    	return $this->belongsTo('App\User');
    }

    public function owner(){
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

    public function isValid(){
        $playerCount = $this->players()->count();
        if($this->sport->min_team_players > $playerCount){
            return false;
        }
        return ($this->sport->max_team_players <= $playerCount);
    }
}
