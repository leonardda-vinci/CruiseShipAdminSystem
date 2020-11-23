<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestValidation extends Model
{
    protected $table = 'requestvalidation';
    public $timestamps = false;

    public function item()
    {
    	return $this->belongsto('App\RequestValidation');
    }
}
