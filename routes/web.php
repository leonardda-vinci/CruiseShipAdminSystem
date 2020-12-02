<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/passengerreservation', 'PassengerReservationController@index');

Route::get('/passengerreservation/create', 'PassengerReservationController@create');

Route::get('/passengerreservation/{PassengerReservation}', 'PassengerReservationController@show');

Route::post('/passengerreservation', 'PassengerReservationController@store');

Route::get('/passengerreservation/{PassengerReservation}/edit', 'PassengerReservationController@edit');

Route::get('passengerreservation/{PassengerReservation}/delete', 'PassengerReservationController@delete');

Route::delete('passengerreservation/{PassengerReservation}', 'PassengerReservationController@destroy');

