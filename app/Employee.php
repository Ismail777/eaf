<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function candidate() {
		return $this->hasOne ('App\Candidate');
	}
}
