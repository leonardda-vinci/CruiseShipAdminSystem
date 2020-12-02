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
    	$ID =['B321','B322','B323']
    	return view('ShipAndCruises.create', compact('ID'));

    	$ShipType =['Cruise','Vessel']
    	return view('ShipAndCruises.create', compact('ShipType'));




    }
    public function store()
    {
    	$
    }
}
