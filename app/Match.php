<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
