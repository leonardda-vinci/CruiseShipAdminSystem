<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
	return view('welcome');
});

Route::get('/templates', 'TemplatesController@index');
Route::get('/templates/about', 'TemplatesController@about');
Route::get('templates/sign-in', 'TemplatesController@signIn');

//crud for amenity bookings
//eloquent
Route::get('/amebook', 'AmenityBookingsController@index');

Route::get('/bookings/{book}', 'AmenityBookingsController@show');

//crud
Route::get('/bookings/create', 'AmenityBookingsController@create');

Route::post('/bookings', 'AmenityBookingsController@store');

Route::get('/bookings/{book}/edit', 'AmenityBookingsController@edit');

Route::put('/bookings/{book}', 'AmenityBookingsController@update');	

Route::delete('/bookings/{book}', 'AmenityBookingsController@destroy'); 


//crud for Ship and Cruises
Route::get('/ShipAndCruises','ShipAndCruisesController@index')
//create
Route::get('/ShipAndCruises/{ShipAndCruises}', 'ShipAndCruisesController@show');

Route::get('/ShipAndCruises/create', 'ShipAndCruisesController@create');
//store
Route::post('/ShipAndCruises', 'ShipAndCruisesController@store');

//up
Route::get('/ShipAndCruises/{ShipAndCruises}/edit', 'ShipAndCruisesController@edit');

Route::put('/ShipAndCruises/{ShipAndCruises}', 'ShipAndCruisesController@update');	

//del

Route::delete('/ShipAndCruises/{ShipAndCruises}', 'ShipAndCruisesController@destroy'); 






