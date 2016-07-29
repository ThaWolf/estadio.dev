<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Match extends Model
{
	protected $table = 'match';

	public function round(){
		return $this->belongsTo('App\Round');
	}

	public function local(){
		return $this->morphTo();
	}

	public function away(){
		return $this->morphTo();
	}

	public function winner(){
		return $this->morphTo();
	}

	public function reports(){
		return $this->hasMany('App\MatchUserReport');
	}

	public function isLocal($user){
		if($this->round->tournament->haveTeams()){
			return $this->local_id == $user->teamForSport($this->round->tournament->sport)->id;
		} else {
			return $this->local_id == $user->id;
		}
	}

	public function canMakeReport($user){
		$teamCollection = collect([ $this->local->id, $this->away->id ]);
        if($this->round->tournament->haveTeams()){
        	if($user->hasTeamForSport($this->round->tournament->sport)){
        		$participantId = $user->teamForSport($this->round->tournament->sport)->id;
        	} else {
        		$participantId = 'invalid';
        	}
        } else {
        	$participantId = $user->id;	
        }
    	return $teamCollection->contains($participantId);
    }

	/**
	* Resolves a match status from the players requests
	**/
	public function resolve(){
		if($this->status == 'Finished'){
			return;
		}
		$this->status = 'Dispute';
		$reports = $this->reports;
		if($reports->count() == 2){
			$local = $reports->first();
			$away = $reports->last();
			if($local->participant == 'Away'){
				$local = $reports->last();
				$away = $reports->first();
			}
			$dispute = false;

			if($local->score_local != $away->score_local){
				$dispute = true;
			} else {
				$this->score_local = $local->score_local;
			}

			if($local->score_away != $away->score_away){
				$dispute = true;
			} else {
				$this->score_away = $local->score_away;
			}

			if($local->winner != $away->winner){
				$dispute = true;
			} else {
				$this->winner()->associate($local->winner);
			}

			if(!$dispute){
				$this->status = 'Finished';
			}
		}
		$this->save();
	}
}
