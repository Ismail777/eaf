<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
     
     public function employee(){
    	return $this->hasOne ('App\Employee');
    }

	public function position() {
		return $this->hasOne ('App\Position');
	}

	public function educations() {
		return $this->hasMany ('App\Education');
	}


	public function employments() {
		return $this->hasMany ('App\Employment','candidate_id');
	}

	public function declaration() {
		return $this->hasOne ('App\Declaration');
	 }

	public function outcome() {
		return $this->hasOne ('App\Outcome');
	}

}
