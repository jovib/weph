<?php

Route::group(array('before' => 'auth'), function()
{

  Route::resource('phone', 'PhoneController');
  Route::resource('user', 'UsersController', ['only' => ['index', 'edit', 'create', 'update', 'store', 'destroy']]);
  Route::get('/', function()
  {
    return View::make('start');
  });
  Route::get('profile', function()
  {
    return View::make('sessions.profile');
  });

  Route::get('logout', 'SessionsController@destroy');

});

Route::get('login', 'SessionsController@create');

Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
