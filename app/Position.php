<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function candidate(){
     return $this->belongsTo ('App\Candidate','candidate_id');
    }
}
