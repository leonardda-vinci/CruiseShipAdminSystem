<?php

namespace App\Http\Controllers;

use App\Amenity;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    //Return view
    public function index()
    {
    	return view('templates.index');
    }

    //Return view for About
    public function about()
    {
    	return view('templates.about');
    }    

    //Return view for Sign up
    public function signIn()
    {
    	return view('templates.sign_in');
    }
}
