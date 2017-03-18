<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    
	public function position() {
		return $this->hasOne ('App\Position','candidate_id');
	}

	public function education() {
		return $this->hasMany ('App\Education');
	}

}
