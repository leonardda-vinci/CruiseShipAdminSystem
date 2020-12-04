<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    publuc function ship() {
    	return $this->hasMany(Cruise::class); 
    }
}
