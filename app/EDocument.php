<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EDocument extends Model
{
    public $table='edocuments';
     public function employee () {
    return $this->belongsTo ('App\Employee');
    }
}
