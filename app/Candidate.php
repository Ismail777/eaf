<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    
	public function position() {
		return $this->hasOne ('App\Position','id');
	}

	public function education() {
		return $this->hasMany ('App\Education','id');
	}


	public function employment() {
		return $this->hasMany ('App\Employment','id');
	}

	public function declaration() {
		return $this->hasOne ('App\Declaration','id'); }

}
