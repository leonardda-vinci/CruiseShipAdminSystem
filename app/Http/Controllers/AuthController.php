<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login()
    {
    	// validate the form
    	request()->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);
    	// check the email and password
    	// key volume pair array of column to match the value
    	// email => request -> email
    	// password => request -> password

    	$personal = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($personal))
    	{
    	return redirect('/dashboard');
    	}
    	return back()->withErrors([
    		'Personal' => 'Incorrect Email or Password'
    	]);
    }

    public function logout()
    {
    	Auth::logout();
    	redirect('/login');
    }
}
