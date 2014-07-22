@extends('layouts/master')

@section('title')
Directorio
@stop

@section('action-menu')
<li><a href="{{URL::to('/phone')}}">Ver todo</a></li>
@stop

@include('layouts/sidebar')
@section('cont')
<div class="col-xs-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Crear nuevo usuario</h3>
		</div>
		<div class="panel-body">
		{{Form::open(array('url'=>'phone', 'class' => 'form-horizontal'))}}

			<div class="form-group">
				<div class="col-xs-2">
				{{Form::text('anie',Input::old('anie'), array('class'=>'form-control', 'placeholder'=>'Extención'))}}
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4">
				{{Form::text('firstname',Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Nombre'))}}
				</div>
				<div class="col-xs-4">
				{{Form::text('lastname',Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Apellido'))}}
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4">
				{{Form::text('mail',Input::old('mail'), array('class'=>'form-control', 'placeholder'=>'Correo'))}}
				</div>
				<div class="col-xs-4">
				{{Form::text('celular',Input::old('celular'), array('class'=>'form-control', 'placeholder'=>'Celular'))}}
				</div>			
			</div>
			<div class="form-group">
				<div class="col-xs-3">
				{{Form::text('cargo',Input::old('cargo'), array('class'=>'form-control', 'placeholder'=>'Cargo'))}}
				</div>
				<div class="col-xs-3">
				{{Form::select('dep', array('UNKNOWN' => 'DEPARTAMENTO','SERVICIO TECNICO' => 'SERVICIO TECNICO','REPUESTOS' => 'REPUESTOS', 'MARKETING' => 'MARKETING', 'MAQUINARIA -- INDUSTRIAL' => 'MAQUINARIA -- INDUSTRIAL', 'GTOS. DE VTAS REPUESTO Y SOPORTE AL PROD' => 'GTOS. DE VTAS REPUESTO Y SOPORTE AL PROD', 'GTOS DEPTO. DE SISTEMAS' => 'GTOS DEPTO. DE SISTEMAS', 'EJECUTIVO' => 'EJECUTIVO', 'DESARROLLO DE PERSONAL Y SGI' => 'DESARROLLO DE PERSONAL Y SGI', 'CONTRALORIA' => 'CONTRALORIA'), null, array('class'=>'form-control'));}}
				</div>
				<div class="col-xs-3">
				{{Form::select('sucursal', array('UNKNOWN' => 'SUCURSAL','CASA MATRIZ' => 'CASA MATRIZ','EL ROBLE' => 'EL ROBLE', 'DAVID' => 'DAVID'), null, array('class'=>'form-control'));}}
				</div>	
			</div>
			<div class="form-group">
				<div class="col-xs-8">
				{{Form::textarea('note',Input::old('note'), array('class'=>'form-control', 'placeholder'=>'Observación'))}}
				</div>
			
			</div>
			<div class="form-group">
				<div class="col-xs-3">
				{{Form::submit('Salvar', array('class' => 'btn btn-primary'))}}
				<a href="{{URL::to('/phone')}}"><button type="button" class="btn btn-danger">Salir</button></a>
				</div>
			</div>
		{{Form::close()}}

		</div>
	</div>
</div>

@stop