@extends('layouts/master')

@section('cont')
<h2>Editando {{$phone->firstname}} {{$phone->firstname}}</h2>
	{{Form::model($phone, array('route'=>array('phone.update', $phone->phone_id), 'method'=>'PUT'))}}
		<div>
			{{Form::text('anie', null)}}
		</div>
		<div>
			{{Form::text('firstname', null)}}
		</div>
		<div>
			{{Form::text('lastname', null)}}
		</div>
		<div>
			{{Form::text('celular', null)}}
		</div>
		<div>
			{{Form::text('cargo', null)}}
		</div>
		<div>
			{{Form::text('Dep', null)}}
		</div>
		<div>
			{{Form::textarea('note', null)}}
		</div>
		{{Form::submit('salvar')}}
	{{Form::close()}}

@stop