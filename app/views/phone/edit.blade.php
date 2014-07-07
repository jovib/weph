@extends('layouts/master')

@section('cont')
<div class="col-xs-10">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Editando {{$phone->firstname}} {{$phone->lastname}}</h3>
		</div>
		{{Form::model($phone, array('class'=>'form-horizontal','role'=>'form','route'=>array('phone.update',$phone->phone_id),'method'=>'PUT'));}}
		<div class="panel-body">
			<div class="form-group">
				{{Form::label('anie', 'Extensión',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('anie', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('firstname', 'Nombre',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('firstname', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
					{{Form::label('lastname', 'Apellido',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('lastname', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('celular', 'Celular',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('celular', null, array('class'=>'form-control'));}}			
				</div>
			</div>
			<div class="form-group">
				{{Form::label('mail', 'Correo',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('mail', null, array('class'=>'form-control'));}}
				</div>
			</div>	
			<div class="form-group">
				{{Form::label('cargo', 'Cargo',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('cargo', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('dep', 'Departamento',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('dep', null, array('class'=>'form-control'));}}
				</div>
			</div>
			<div class="form-group">
				{{Form::label('sucursal', 'Sucursal',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::text('sucursal', null, array('class'=>'form-control'));}}
				</div>
			</div>	
			<div class="form-group">
				{{Form::label('note', 'Observación',array('class'=>'col-sm-2 control-label'));}}
				<div class="col-sm-10">	
					{{Form::textarea('note', null, array('class'=>'form-control'));}}			
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				{{Form::submit('Salvar', array('class' => 'btn btn-primary'));}}
				<a href="{{URL::to('/phone')}}"><button type="button" class="btn btn-danger">Salir</button></a>
				</div>
			</div>
		</div>
		{{Form::close()}}
	</div>
</div>

@stop