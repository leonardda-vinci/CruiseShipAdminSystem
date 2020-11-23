<?php

namespace App\Http\Controllers;

use App\Bookings;
use Illuminate\Http\Request;

class AmenityBookingsController extends Controller
{
    public function index()
    {
    	$book = Bookings::all();
    	return view('amenity-bookings.index', compact('amenity-bookings'));
    
    }

    public function show(Bookings $book){

    	return view('amenity-bookings.show' compact('amenity-bookings'));
    }

    public function create(){
    	request()->validate([
    		'passenger_name' => 'required',
    		'amenity_name' => 'required'

    	]);

    	$book = ['passenger_name' => request()->passenger_name, 'amenity_name' => request()->amenity_name];
    	if(Bookings::attempt($book)) {
    		return redirect('/amebook');
    	}
    	return back()->withErrors([
    		'book' => 'Invalid input'
    	]);
    }
  
    public function store(){
    	$validated_fields = request()->validate([
    		'passenger_name' => 'required',
    		'amenity_name' => 'required|unique:amenity-bookings'

    	]);
    	$book = Bookings::create($validated_fields);

        $book = new Bookings;
        $book->passenger_name = request()->passenger_name;
        $book->amenity_name = request()->amenity_name;
        $book->save();


        return redirect('/amebook');
    }

    public function edit(Bookings $book){
    	return view('amenity-bookings.edit', compact('amenity-bookings'));
    }

    public function update(Bookings $book){
    	$book = new Bookings;
        $book->passenger_name = request()->passenger_name;
        $book->amenity_name = request()->amenity_name;
        $book->save();
        return redirect('/bookings'.$book->passenger);

    }

    public function destroy(Bookings $book){
    	$book->delete();
    	return redirect('/amebook');
    }
   
}
