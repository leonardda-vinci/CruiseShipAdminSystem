<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/requestvalidation', 'RequestValidation@index');

Route::middleware(['auth'])->group(function() {

Route::get('/requestvalidation/create', 'RequestValidationController@create');

Route::get('/requestvalidation/{RequestValidation}', 'RequestValidationController@show');

Route::post('/requestvalidation', 'RequestValidationController@store');

Route::get('/requestvalidation/{RequestValidation}/edit', 'RequestValidationController@edit');

});

