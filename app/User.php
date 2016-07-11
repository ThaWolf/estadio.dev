<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function tournaments(){
        return $this->morphToMany('App\Tournament' , 'tournament', 'tournament_participant');
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

}
