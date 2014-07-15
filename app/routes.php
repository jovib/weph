<?php

Route::resource('phone', 'PhoneController');

Route::get('/', function()
{
	return View::make('start');
});
