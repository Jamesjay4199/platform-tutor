<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }

    public function client(){
    	return $this->belongsTo('App\Client');
    }
}