<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
	return view('welcome');
});

Route::get('/templates', 'TemplatesController@index'); // Route for index in templates

Route::get('/templates/about', 'TemplatesController@about'); // Route for about

Route::get('/templates/sign-in', 'TemplatesController@signIn'); // Route for sign in