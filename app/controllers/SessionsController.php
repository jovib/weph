<?php

class SessionsController extends BaseController {

	public function showlogin()
	{
		if (Auth::check())
		{
			return Redirect::to('/');
		}
		return View::make('login');
	}

	public function postlogin()
	{
		if (Auth::attempt(Input::only('username','password')))
		{
			return Redirect::to('/');
		}
		return Redirect::to('login')
                    ->with('mensaje_error', '
                        <div class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>Oh snap! Tienes un error!</h4>
                        <p>Tus datos son incorrectos</p>
                        </div>')
                    ->withInput();
	}
	public function logout()
	{
		Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', '
                        <div class="alert alert-info fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>Bye! Has salido del sistema!</h4>
                        <p>Tu sesión ha sido cerrada.</p>
                        </div>');
	}
}