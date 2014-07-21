@extends('layouts/master')

@section('cont')

@if (Session::has('message'))
	{{ Session::get('message') }}
@endif

<h1 class="page-header">Directorio</h1>
<table class="table table-hover">
	<thead>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>CORREO</th>
		<th>ACCIÓN</th>
	</thead>
	<tbody>
	@foreach ($user as $key => $value)
		<tr>
			<td>{{$value->firstname}}</td>
			<td>{{$value->lastname}}</td>
			<td>{{$value->mail}}</td>
			<td>
				<div>
					<a href="{{URL::to('user/'.$value->id.'/edit')}}"><button type="button" class="btn btn-xs btn-primary">Editar</button></a>
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rmv{{$value->id}}">Borrar</button>
				</div>
				<div class="modal fade" id="rmv{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Borrar usuario</h4>
							</div>
							<div class="modal-body">
								<p>Estas seguro de querer borrar a <strong>{{$value->firstname}} {{$value->lastname}}</strong></p>
							</div>
							<div class="modal-footer">
								<a href="{{URL::to('user')}}"><button type="button" class="btn btn-success">Cancelar</button></a>&nbsp;
								{{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'pull-right'));}}
								{{ Form::hidden('_method', 'DELETE');}}
								{{ Form::submit('remove', array('class' => 'btn btn-danger'));}}
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop