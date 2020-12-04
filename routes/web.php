<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
	return view('welcome');
});

Route::get('/templates', 'TemplatesController@index');
Route::get('/templates/about', 'TemplatesController@about');
Route::get('templates/sign-in', 'TemplatesController@signIn');

//crud for attendants
Route::get('/', 'AttendantsController@index');
Route::get('/attendants/{attendant}', 'AttendantsController@show');
Route::get('/attendants/{attendant}/edit', 'AttendantsController@edit');
Route::get('/attendants/create', 'AttendantsController@create');
Route::post('/attendants', 'AttendantsController@strore');
Route::put('/attendants/{attendant}', 'AttendantsController@update');
Route::delete('/attendants/{attendant}', 'AttendantsController@destroy');


	