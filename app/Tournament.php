<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DateTime;
use DateInterval;

class Tournament extends Model
{
	protected $table = 'tournament';

	/**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
	protected $guarded = [];

	public function creator(){
		return $this->belongsTo('App\User', 'creator_id');
	}

	public function sport(){
		return $this->belongsTo('App\Sport');
	}

	public function participants(){
		if($this->type == 'Team'){
			return $this->morphedByMany('App\Team', 'participant', 'tournament_participant');
		} else {
			return $this->morphedByMany('App\User' , 'participant', 'tournament_participant');
		}
	}

	public function rounds(){
		return $this->hasMany('App\Round');
	}

	public function current_round(){
		return $this->belongsTo('App\Round', 'current_round_id');
	}

	public function startDateTime(){
		return new DateTime($this->start_time);
	}

	public function canStart(DateTime $currentDate){
		if($this->startDateTime() > $currentDate){
			return false;
		}
		return ($this->status == 'NotStarted');
	}

	public function hasEnoughtPlayers(){
		return ($this->participants()->count() == $this->needed_players);
	}

	/**
	* Returns the DateInterval from this round to the next
	**/
	public function getRoundInterval(){
		return new DateInterval('PT'.$this->round_time_limit.'S');
	}

	public function haveTeams(){
		return $this->type == 'Team';
	}

	public function canParticipate($user){
		if($this->haveTeams()){
			return $user->hasTeamForSport($this->sport);
		}
		$accounts = $user->accounts()->forSport($this->sport)->count();
		return ($accounts > 0);
	}

	private function participantForUser($user){
		if($this->haveTeams()){
			return $user->teamForSport($this->sport);
		} else {
			return $user;
		}
	}

	public function isSubscribed($user){
		if(!$this->canParticipate($user)){
			return false;
		}
		return $this->participants()->get()->contains($this->participantForUser($user));
	}

	public function subscribe($user){
		if(!$this->canParticipate($user)){
			return false;
		}
		$participant = $this->participantForUser($user);
		if($this->haveTeams() && !$participant->isValid()){
			return false;
		}
		$this->participants()->attach($participant);
		return true;
	}

	public function unsubscribe($user){
		if(!$this->canParticipate($user)){
			return false;
		}
		$this->participants()->detach($this->participantForUser($user));
		return true;
	}

	public function change_date_string($tournament){
		$array_months = array(
    		"1" => "Enero",
    		"2" => "Febrero",
  		    "3"  => "Marzo",
		    "4"  => "Abril",
		    "5"  => "Mayo",
		    "6"  => "Junio",
		    "7"  => "Julio",
		    "8"  => "Agosto",
		    "9"  => "Septiembre",
		    "10"  => "Octubre",
		    "11" => "Noviembre",
		    "12"  => "Diciembre",
		);
		$phpdate = strtotime( $tournament->start_time );
		$mysqldateMonth = date( 'm', $phpdate );
		$mysqldateDay = date( 'd', $phpdate );
		$month = "1";
		while ($mysqldateMonth != $month) {
			$month++;
		}
		$tournament->start_time = $mysqldateDay." de ".$array_months[$month];
		return $tournament;
	}
    
}
