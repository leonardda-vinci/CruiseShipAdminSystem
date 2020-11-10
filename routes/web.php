<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
	return view('welcome');
});

Route::get('/templates', 'TemplatesController@index');
Route::get('/templates/about', 'TemplatesController@about');
Route::get('templates/sign-in', 'TemplatesController@signIn');