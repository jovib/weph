<?php

Route::get('login', array(
	'as'=>'login',
	'uses'=>'SessionsController@showlogin'
));

Route::group(array('before' => 'auth'), function()
{

  Route::resource('phone', 'PhoneController');
  Route::resource('user', 'UsersController');
  Route::get('/', function()
  {
    return View::make('start');
  });

  Route::get('logout', 'SessionsController@logout');

});

Route::post('login', 'SessionsController@postlogin');
