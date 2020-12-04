<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestValidation extends Model
{
    protected $table = 'item';
    public $timestamps = false;

    public function item()
    {
    	return $this->belongsto('App\RequestValidation');
    }
}
