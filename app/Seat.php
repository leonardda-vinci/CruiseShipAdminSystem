<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
     protected $table = 'seat';
     public $timestamps = false;

     public function seat()
    {
    	return $this->belongsto('App\RequestValidation');
    }
}
