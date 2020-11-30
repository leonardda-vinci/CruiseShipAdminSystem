<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    protected $table = 'amenities';
    public $timestamps	= false;

    public function amenities()
    {
    	return $this->belongsto('App\Amenities');
    }
}
