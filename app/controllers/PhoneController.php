<?php

class PhoneController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$phone=Phone::all();
		return View::make('phone.index')->with('phone',$phone);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('phone.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'anie'=>'required',
			'firstname'=>'required',
			'lastname'=>'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('phone/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$phone = new Phone;
			$phone->anie=Input::get('anie');
			$phone->firstname=Input::get('firstname');
			$phone->lastname=Input::get('lastname');
			$phone->celular=Input::get('celular');
			$phone->cargo=Input::get('cargo');
			$phone->dep=Input::get('dep');
			$phone->note=Input::get('note');
			$phone->save();

			Session::flash('message', '
			<div class="alert alert-succes fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4>Cambio satisfactorio!!</h4>
			<p>Contacto creado correctamente!!</p>
			</div>');

			return Redirect::to('phone');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($phone_id)
	{
		$phone=Phone::find($phone_id);
		return View::make('phone.show')->with('phone', $phone);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($phone_id)
	{
		$phone = Phone::find($phone_id);
		return View::make('phone.edit')
			->with('phone', $phone);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($phone_id)
	{
		$rules = array(
			'anie'=>'required',
			'firstname'=>'required',
			'lastname'=>'required'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('phone/'.$phone_id.'/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$phone = Phone::find($phone_id);
			$phone->anie = Input::get('anie');
			$phone->firstname = Input::get('firstname');
			$phone->lastname = Input::get('lastname');
			$phone->celular = Input::get('celular');
			$phone->cargo = Input::get('cargo');
			$phone->dep = Input::get('dep');
			$phone->note = Input::get('note');
			$phone->save();

			Session::flash('message', '
			<div class="alert alert-success fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4>Cambio satisfactorio!!</h4>
			<p>Contacto actualizado correctamente!!</p>
			</div>');
			
			return Redirect::to('phone');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($phone_id)
	{
		$phone = Phone::find($phone_id);
		$phone->delete();
		Session::flash('message', '
			<div class="alert alert-warning fade in">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <h4>Oh snap!</h4>
	        <p>Contacto borrado correctamente!!</p>
	        </div>');
		return Redirect::to('phone');
	}


}
