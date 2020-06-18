<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index')->name("home");

Route::get('/showOmino/{id}', 'OminiController@show')->name("showOmino");
// crea omino
Route::get('/createOmino', 'OminiController@create')->name("createOmino");

Route::post('/storeOmino', 'OminiController@store')->name("storeOmino");

// aggiorna omino
Route::get('/editOmino/{id}', 'OminiController@edit')->name("editOmino");

Route::post('/updateOmino/{id}', 'OminiController@update')->name("updateOmino");

//licenzia Omino
Route::get('/deleteOmino/{id}', 'OminiController@delete')->name("deleteOmino");
