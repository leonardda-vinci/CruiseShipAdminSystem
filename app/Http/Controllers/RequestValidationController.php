<?php

namespace App\Http\Controllers;

use RequestValidation;
use Illuminate\Http\Request;


class RequestValidationController extends Controller
{
    public function index()
    {    	
    	return seat('requestvalidation.index');
    }

    public function create()
    {
    	request()->validate([
    		'name' => 'required',
    		'seat number' => 'required'
    	]);

    	$seat = ['name' => request()->name, 'seat number' =>
    	request()->seatnumber];
    	if(Auth::attemp($seat))
    	{
    		return redirect('/requestvalidation');
    	}
    	return back()->withErrors([
    		'Seat' => 'Please put a Name and seat number!'])
    }

    public function show($seatId){
    	$seat = RequestValidation::find($seatId);
    	return view('requestvalidation.show', compact('requestvalidation'));
    }

    public function edit($seatId)
    {
    	request()->validate([
    		'name' => 'required',
    		'seat number' => 'required'
    	]);

    	$seat = ['name' => request()->name, 'seat number' =>
    	request()->seatnumber];
    	if(Auth::attemp($seat))
    	{
    		return redirect('/requestvalidation');
    	}
    	return back()->withErrors([
    		'Seat' => 'Please put a Name and seat number!'])
    }

    public function store()
    {
    	$seat = new RequestValidation;
    	$seat->name = request()->name;
    	$seat->seatnumber = request()->seatnumber;
    	$seat->save();

    	return redirect('/requestvalidation');
    }

    public function update(RequestValidation $requestvalidation)
    {
    	$seat->name = request()->name;
    	$seat->seatnumber = request()->seatnumber;
    	$seat->save();

    	return redirect('/requestvalidation/'.$seat->id);
    }
}
