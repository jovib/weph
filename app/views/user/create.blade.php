@extends('layouts/master')

@section('title')
Usuarios
@stop

@section('action-menu')
<li><a href="{{URL::to('/user')}}">Ver todo</a></li>
@stop

@include('layouts/sidebar')
@section('cont')
<div class="col-xs-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Crear nuevo usuario</h3>
		</div>
		<div class="panel-body">
		{{Form::open(array('url'=>'user', 'class' => 'form-horizontal'))}}

			<div class="form-group">
				<div class="col-xs-4">
				{{Form::text('firstname',Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Nombre'))}}
				{{$errors->first('firstname')}}
				</div>
				<div class="col-xs-4">
				{{Form::text('lastname',Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Apellido'))}}
				{{$errors->first('lastname')}}
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4">
				{{Form::text('mail',Input::old('mail'), array('class'=>'form-control', 'placeholder'=>'Correo'))}}
				</div>
				<div class="col-xs-4">
				{{Form::text('role_id',Input::old('role_id'), array('class'=>'form-control', 'placeholder'=>'Rol'))}}
				{{$errors->first('role_id')}}
				</div>		
			</div>
			<div class="form-group">
				<div class="col-xs-4">
				{{Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'usuario'));}}
				{{$errors->first('username')}}
				</div>		
			</div>
			<div class="form-group">
				<div class="col-xs-4">
				{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Contraseña')) }}
				{{$errors->first('password')}}
				<br>
				{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirmar Contraseña')) }}
				{{$errors->first('password_confirmation')}}
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3">
				{{Form::submit('Salvar', array('class' => 'btn btn-primary'))}}
				<a href="{{URL::to('/user')}}"><button type="button" class="btn btn-danger">Salir</button></a>
				</div>
			</div>
		{{Form::close()}}

		</div>
	</div>
</div>

@stop