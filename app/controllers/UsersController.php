<?php

class UsersController extends \BaseController {

	public function index()
	{
		$user = User::all();
		return View::make('user.index')->with('user',$user);
	}

	public function create()
	{
		return View::make('user.create');
	}

	public function store()
	{
		$rules = array(
			'firstname'=>'required',
			'lastname'=>'required',
			'role_id'=>'required',
			'username'=>'required',
			'password'=>'required|between:6,12|confirmed',
			'password_confirmation'=>'required|between:6,12'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('user/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->role_id = Input::get('role_id');
			$user->username = Input::get('username');
			$user->password = Hash::make('password');
			$user->save();

			Session::flash('message', '
			<div class="alert alert-success fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4>Cambio satisfactorio!!</h4>
			<p>Usuario creado correctamente!!</p>
			</div>');

			return Redirect::route('user.index');
		}
	}

	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.edit')
			->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'firstname'=>'required',
			'lastname'=>'required',
			'role_id'=>'required',
			'username'=>'required',
			'password'=>'required|between:6,12|confirmed',
			'password_confirmation'=>'required|between:6,12'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('user/'.$id.'/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$user = User::find($id);
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->role_id = Input::get('role_id');
			$user->username = Input::get('username');
			$user->password = Hash::make('password');
			$user->save();

			Session::flash('message', '
			<div class="alert alert-success fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4>Cambio satisfactorio!!</h4>
			<p>Usuario actualizado correctamente!!</p>
			</div>');

			return Redirect::to('user');
		}
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Session::flash('message', '
			<div class="alert alert-warning fade in">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <h4>Oh snap!</h4>
	        <p>Usuario borrado correctamente!!</p>
	        </div>');
		return Redirect::to('user');
	}


}
