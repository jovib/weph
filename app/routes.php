<?php

Route::resource('phone', 'PhoneController');
Route::resource('user', 'UsersController');
Route::get('/', function()
{
	return View::make('start');
});
