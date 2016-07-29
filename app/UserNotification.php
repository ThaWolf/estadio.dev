<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
	protected $table = 'user_notification';
	/**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
	protected $guarded = [];
	
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
