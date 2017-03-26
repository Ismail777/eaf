<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    
     public function candidate(){
    	return $this->belongsTo ('App\Candidate');
    }
    }
