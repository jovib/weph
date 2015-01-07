<?php

class SessionsController extends BaseController {

	public function index()
	{
		return View::make('sessions.index');
	}


  public function create()
	{
		return View::make('login');
	}

  public function store()
	{
		$input = Input::all();
		$attempt = Auth::attempt([
			'username' => $input['username'],
			'password' => $input['password']
		]);

		if ($attempt) return Redirect::intended('/');

		return Redirect::to('login')
                    ->with('mensaje_error', '
                        <div class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>Oh snap! Tienes un error!</h4>
                        <p>Tus datos son incorrectos</p>
                        </div>')
                    ->withInput();
	}
	public function destroy()
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
