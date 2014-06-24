@extends('layouts/master')

@section('cont')
<h2>{{$phone->firstname}} {{$phone->lastname}}</h2>
	<p>
		<strong>Extención:</strong> {{$phone->anie}}<br>
		<strong>Celular:</strong> {{$phone->celular}}<br>
		<strong>Cargo:</strong> {{$phone->cargo}}<br>
		<strong>Departamento:</strong> {{$phone->Dep}}<br>
		<strong>Observación:</strong> {{$phone->note}}<br>
	</p>

@stop