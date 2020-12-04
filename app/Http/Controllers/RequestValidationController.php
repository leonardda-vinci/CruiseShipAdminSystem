<?php

namespace App\Http\Controllers;

use RequestValidation;
use Illuminate\Http\Request;

class RequestValidationController extends Controller
{
    public function index()
    {    	
    	return view('requestvalidation.index');
    }

    public function create()
    {
    	request()->validate([
    		'name' => 'required',
    		'code' => 'required'
    	]);

    	$item = ['name' => request()->name, 'code' =>
    	request()->code];
    	if(Auth::attemp($item))
    	{
    		return redirect('/requestvalidation');
    	}
    	return back()->withErrors([
    		'Item' => 'Please put a Name and code!'])
    }

    public function show($itemId){
    	$item = RequestValidation::find($itemId);
    	return view('requestvalidation.show', compact('requestvalidation'));
    }

    public function edit($itemId)
    {
    	request()->validate([
    		'name' => 'required',
    		'code' => 'required'
    	]);

    	$item = ['name' => request()->name, 'code' =>
    	request()->code];
    	if(Auth::attemp($item))
    	{
    		return redirect('/requestvalidation');
    	}
    	return back()->withErrors([
    		'Item' => 'Please put a Name and code!'])
    }

    public function store()
    {
    	$item = new RequestValidation;
    	$item->name = request()->name;
    	$item->code = request()->code;
    	$item->save();

    	return redirect('/requestvalidation');
    }

    public function update(RequestValidation $requestvalidation)
    {
    	$item->name = request()->name;
    	$item->code = request()->code;
    	$item->save();

    	return redirect('/requestvalidation/'.$item->id);
    }
}
