<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    public function matches(){

		return $this->belongsTo('App\Match');

}
}
