<?php

Route::group(array('before' => 'auth'), function()
{

  Route::resource('phone', 'PhoneController');
  Route::resource('user', 'UsersController');
  Route::get('/', function()
  {
    return View::make('start');
  });
  Route::get('profile', function()
  {
    return View::make('profile');
  });

  Route::get('logout', 'SessionsController@destroy');

});

Route::get('login', 'SessionsController@create');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'store', 'destroy']]);
