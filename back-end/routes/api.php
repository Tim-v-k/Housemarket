<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('houses', 'App\Http\Controllers\HousesController@get');
Route::post('houses/create', 'App\Http\Controllers\HousesController@createHouse');
Route::post('houses/edit/{id}', 'App\Http\Controllers\HousesController@editHouse');
Route::get('houses/{id}', 'App\Http\Controllers\HousesController@getHouse');
Route::post('houses/delete/{id}', 'App\Http\Controllers\HousesController@delete');

// Route::post('houses', 'App\Http\Controllers\HousesController@post');
// Route::update('houses', 'App\Http\Controllers\HousesController@update');
