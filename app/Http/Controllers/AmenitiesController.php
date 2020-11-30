<?php

namespace App\Http\Controllers;

use App\Amenities;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
     public function index(){
        $amenities = Amenities::all();
        return view('amenities.index', compact('amenities'));
    }

      public function create(){
        return view('amenities.create');
    }

    
    public function show($amenitiesId){
        $amenities = Amenities::find($amenitiesId);
        return view('amenities.show', compact('amenities'));
    }

    
    public function edit($amenitiesId){
        $amenities = Amenities::find($amenitiesId);
        return view('amenities.edit', compact('amenities'));
    }

    
    public function store(){
        $amenities = new Amenities;
        $amenities->name = request()->name;
        $amenities->code = request()->code;
        $amenities->save();

        return redirect('/amenities');
    }

    public function update(Amenities $amenities){
        $amenities->name = request()->name;
        $amenities->code = request()->code;
        $amenities->save();

        return redirect('/amenities/'.$amenities->id);
    }

    public function delete($amenitiesId){
        $amenities = Amenities::find($amenitiesId);
        return view('amenities.delete', compact('amenities'));
    }

    public function destroy(Amenities $amenities){
        $amenities->delete();
        return redirect('/amenities');
    }
}
