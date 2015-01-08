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
			<h3 class="panel-title">Editando {{$user->firstname}} {{$user->lastname}}</h3>
		</div>
		{{Form::model($user, array('class'=>'form-horizontal','role'=>'form','route'=>array('user.update',$user->id),'method'=>'PUT'));}}
		<div class="panel-body">
			<div class="form-group">
				{{Form::label('firstname', 'Nombre',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('firstname', null, array('class'=>'form-control'));}}
					{{$errors->first('firstname')}}
				</div>
			</div>
			<div class="form-group">
					{{Form::label('lastname', 'Apellido',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('lastname', null, array('class'=>'form-control'));}}
					{{$errors->first('lastname')}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('email', 'Correo',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('email', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('role_id', 'Rol',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-xs-4">
				{{Form::text('role_id',Input::old('role_id'), array('class'=>'form-control', 'placeholder'=>'Rol'))}}
				{{$errors->first('role_id')}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('username', 'Usuario',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('username', null, array('class'=>'form-control'));}}
					{{$errors->first('username')}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('password', 'Contraseña',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::password('password', null, array('class'=>'form-control'));}}
					{{$errors->first('password')}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('password_confirmation', 'Confirmar',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::password('password_confirmation', null, array('class'=>'form-control'));}}
					{{$errors->first('password_confirmation')}}
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-10">
				{{Form::submit('Salvar', array('class' => 'btn btn-primary'));}}
				<a href="{{URL::previous()}}"><button type="button" class="btn btn-danger">Salir</button></a>
				</div>
			</div>
		</div>
		{{Form::close()}}
	</div>
</div>

@stop