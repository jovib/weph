<?php

Route::get('login', array('as'=>'login', 'uses'=>'SessionsController@showlogin'));

Route::resource('phone', 'PhoneController');
Route::resource('user', 'UsersController');
Route::get('/', function()
{
	return View::make('start');
});

Route::post('login', 'SessionsController@postlogin')