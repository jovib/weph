@extends('layouts/master')

@section('js-tablesorter')
<script>
$(function() {
	var $table = $('table').tablesorter({
		theme: 'default',
		widgets: ["zebra", "filter"],
		widgetOptions : {
			filter_external : '.search',
			filter_columnFilters: false,
			filter_saveFilters : true,
			filter_reset: '.reset'
		}
	});
});
</script>

@stop

@section('search')
<form class="navbar-form navbar-right">
	<div class="form-group">
		<input data-column="all" type="search" class="search form-control" placeholder="Search...">
	</div>
	<button type="submit" class="reset btn btn-default">clear</button>
</form>

@stop

@section('phone-active')
class="active"
@stop

@section('cont')
@if (Session::has('message'))
	{{ Session::get('message') }}
@endif
<h1 class="page-header">Directorio</h1>
<table class="table table-hover">
	<thead>
		<th>ANIE</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>CARGO</th>
		<th>ACCION</th>
	</thead>
	<tbody>
	@foreach ($phone as $key => $value)
		<tr>
			<td><strong>{{$value->anie}}</strong></td>
			<td>{{$value->firstname}}</td>
			<td>{{$value->lastname}}</td>
			<td>{{$value->cargo}}</td>
			<td>
				<div>
					<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#dtl{{$value->phone_id}}">Ver</button>
					<a href="{{URL::to('phone/'.$value->phone_id.'/edit')}}"><button type="button" class="btn btn-xs btn-primary">Editar</button></a>
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rmv{{$value->phone_id}}">Borrar</button>
				</div>
				<!--modal detalle-->
				<div class="modal fade" id="dtl{{$value->phone_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Detalles</h4>
							</div>
							<div class="modal-body">
								<div>
									<ul class="list-group">
										<li class="list-group-item">{{$value->anie}}</li>
										<li class="list-group-item">{{$value->firstname}} {{$value->lastname}}</li>
										<li class="list-group-item">{{$value->mail}}</li>
										<li class="list-group-item">{{$value->celular}}</li>
									</ul>
									<ul class="list-group">
										<li class="list-group-item">{{$value->cargo}}</li>
										<li class="list-group-item">{{$value->dep}}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--modal borrar-->
				<div class="modal fade" id="rmv{{$value->phone_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<a href="{{URL::to('phone/'.$value->phone_id)}}"><button type="button" class="btn btn-info">Ver detalle</button></a>&nbsp;
								<a href="{{URL::to('phone')}}"><button type="button" class="btn btn-success">Cancelar</button></a>&nbsp;
								{{ Form::open(array('url' => 'phone/' . $value->phone_id, 'class' => 'pull-right'));}}
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