<?php

namespace App\Http\Controllers;
use App\ShipAndCruises;
use Illuminate\Http\Request;

class ShipAndCruisesController extends Controller
{
    public function index()
    {
    	$ShipAndCruises = ShipAndCruises::all();
    	return view('ShipAndCruises.index',compact('ShipAndCruises'));--

    }
    public function show(ShipAndCruises $ShipAndCruises)
    {
    	return view('ShipAndCruises.show', compact("ShipAndCruises"));
    }

    public function create()
    {


    	$ShipType =['Cruise','Vessel'];
    	return view('ShipAndCruises.create', compact('ShipType'));




    }
    public function store()
    {
    	$validated_fields = request()->validate([
    	$ShipAndCruises = new ShipAndCruises
    	$ShipAndCruises->ID = request()->ID;
    	$ShipAndCruises->ShipName = request()->ShipName;
    	$ShipAndCruises->ShipType = request()->ShipType;
    	$ShipAndCruises->save();
    ]);

    	$ShipAndCruises = User::create($validated_fields);

    	return redirect('/ShipAndCruises');


    }
    public function edit(ShipAndCruises $ShipAndCruises)
    {
  
    	$ShipType =['Cruise','Vessel'];
    	return view('ShipAndCruises.edit', compact('ShipAndCruises','ID','ShipType'))

    }
    public function update(ShipAndCruises $ShipAndCruises)
    {
    	$ShipAndCruises->ID = request()->ID;
    	$ShipAndCruises->ShipName = request()->ShipName;
    	$ShipAndCruises->ShipType = request()->ShipType;
    	$room->save();
    	return redirect('/ShipAndCruises');

    }
    public function delete(ShipAndCruises $ShipAndCruises)
    {
    	$ShipAndCruises->delete();
    	return redirect('?ShipAndCruises');

    }
}
