<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function candidate() {
		return $this->belongsTo ('App\Candidate');
	}

	 public function user(){
    	return $this->hasOne('App\User');
    }


	 public function edocument(){
    	return $this->hasOne('App\EDocument');
    }


}
