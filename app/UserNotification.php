<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
	protected $table = 'user_notification';

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
