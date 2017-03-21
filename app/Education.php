<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	public $table = "educations";
    public function candidate () {
    return $this->belongsTo ('App\Candidate');
    }
}
