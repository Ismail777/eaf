<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function candidates(){
     return $this->belongsTo ('App\Candidate');
    }
}
