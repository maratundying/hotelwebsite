<?php

use Illuminate\Support\Facades\Route;



Route::get('/',function(){
	return view('index');
})->middleware('checkReservations');
Route::get('/rooms','MainController@rooms');
Route::get('/we','MainController@we');
Route::get('/contacts','MainController@contacts');
Route::get('/fortwo','MainController@fortwo');
Route::get('/forthree','MainController@forthree');
Route::get('/forfour','MainController@forfour');
Route::get('/forfive','MainController@forfive');
Route::post('/reservation','MainController@reservation');
