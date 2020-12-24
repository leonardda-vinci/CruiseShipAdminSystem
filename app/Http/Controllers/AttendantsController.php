<?php

namespace App\Http\Controllers;

use App\Attendants;
use Illuminate\Http\Request;

class AttendantsController extends Controller
{
    public function index()
    {
    	$attendant = Attendant::all();
    	return view('attendants.index', compact('attendants'));
    
    }

    public function show(Attendant $attendant){

    	return view('attendants.show' compact('Attendant'));
    }

    public function create(){
    	request()->validate([
    		'name' => 'required',
    		'position' => 'required'
    		'gender' => 'required'

    	]);

    	$attendant = ['name' => request()->name, 'position' => request()->position, 'gender' => request()->gender];
    	if(Attendants::attempt($attendant)) {
    		return redirect('/attendant');
    	}
    	return back()->withErrors([
    		'attendant' => 'Invalid input'
    	]);
    }
  
    public function store(){
    	$validated_fields = request()->validate([
    		'name' => 'required'
    		'position' => 'required',
    		'gender' => 'required|unique:attendants'

    	]);
    	$attendant = Attendants::create($validated_fields);

        $attendant = new Attendants;
    	$attendant->name = request()->name;
        $attendant->position = request()->position;
        $attendant->gender = request()->gender;
        $attendant->save();


        return redirect('/attendant');
    }

    public function edit(Attendant $attendant){
    	return view('amenity-bookings.edit', compact('amenity-bookings'));
    }

    public function update(Attendant $attendant){
    	$attendant = new Attendants;
    	$attendant->name = request()->name;
        $attendant->position = request()->position;
        $attendant->gender = request()->gender;
        $attendant->save();
        
        return redirect('/');
        return redirect('.attendant');
    }

    public function destroy(Attendants $attendant){
        $attendant->delete();
        return redirect('/');
        return redirect('/attendant');
    }
}
