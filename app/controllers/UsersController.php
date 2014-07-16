<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();
		return View::make('user.index')->with('user',$user);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'firstname'=>'required',
			'lastname'=>'required',
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
			$user->fistname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->mail = Input::get('mail');
			$user->username = Input::get('username');
			$user->password = Hash::make('password');
			$user->save();

			return Redirect::route('user.index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
