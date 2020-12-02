<?php

namespace App\Http\Controllers;

use App\PassengerReservation;
use Illuminate\Http\Request;

class PassengerReservationController extends Controller
{
     public function index(){
        $passengerreservation = PassengerReservation::all();
        return view('passenger_reservation.index', compact('passenger_reservation'));
    }

      public function create(){
        return view('passenger_reservation.create');
    }

    
    public function show($passengerreservationId){
        $passengerreservation = PassengerReservation::find($passengerreservationId);
        return view('passenger_reservation.show', compact('passenger_reservation'));
    }

    
    public function edit($passengerreservationId){
        $passengerreservation = PassengerReservation::find($passengerreservationId);
        return view('passenger_reservation.edit', compact('passenger_reservation'));
    }

    
    public function store(){
        $passengerreservation = new PassengerReservation;
        $passengerreservation->date = request()->date;
        $passengerreservation->destination = request()->destination;
        $passengerreservation->save();

        return redirect('/passengerreservation');
    }

    public function update(PassengerReservation $passengerreservation){
        $passengerreservation->date = request()->date;
        $passengerreservation->destination = request()->destination;
        $passengerreservation->save();

        return redirect('/passengerreservation/'.$passengerreservation->id);
    }

    public function delete($passengerreservationId){
        $passengerreservation = PassengerReservation::find($passengerreservationId);
        return view('passenger_reservation.delete', compact('passenger_reservation'));
    }

    public function destroy(PassengerReservation $passengerreservation){
        $passengerreservation->delete();
        return redirect('/passengerreservation');
    }
}
