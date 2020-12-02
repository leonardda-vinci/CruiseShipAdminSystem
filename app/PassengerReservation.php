<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassengerReservation extends Model
{
    protected $table = 'passengerreservation';
    public $timestamps	= false;

    public function passengerreservation()
    {
    	return $this->belongsto('App\PassengerReservation');
    }
}
