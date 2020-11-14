<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/amenities', 'AmenitiesController@index');

Route::get('/amenities/create', 'AmenitiesController@create');

Route::get('/amenities/{Amenities}', 'AmenitiesController@show');

Route::post('/amenities', 'AmenitiesController@store');

Route::get('/amenities/{Amenities}/edit', 'AmenitiesController@edit');

Route::get('amenities/{Amenities}/delete', 'AmenitiesController@delete');

Route::delete('amenities/{Amenities}', 'AmenitiesController@destroy');

