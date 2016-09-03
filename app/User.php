<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Team;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accounts(){
        return $this->hasMany('App\SportPlayer', 'user_id');
    }

    public function tournaments(){
        return $this->morphToMany('App\Tournament' , 'participant', 'tournament_participant');
    }

    public function created_tournaments(){
        return $this->hasMany('App\User', 'creator_id');
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

    public function captainTeams(){
        return $this->hasMany('App\Team', 'captain_id');
    }

    public function ownerTeams(){
        return $this->hasMany('App\Team', 'owner_id');
    }

    public function teams(){
        return $this->belongsToMany('App\Team', 'team_user');
    }

    public function hasTeamForSport($sport){
        return (Team::forUser($this)->forSport($sport)->count()) > 0;
    }

    public function teamForSport($sport){
        return Team::forUser($this)->forSport($sport)->get()->first();
    }

    public function notifications(){
        return $this->hasMany('App\UserNotification')->orderBy('id', 'desc');
    }

}
