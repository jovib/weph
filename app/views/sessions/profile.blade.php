<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="utf-8">
	<title>@yield('title') - Phonebook</title>
	{{HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')}}
	{{HTML::style('css/app.css')}}
	{{HTML::style('http://fonts.googleapis.com/css?family=Ubuntu')}}
</head>
<body>
{{HTML::script('js/jquery1-11-0.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
@include('layouts/navbar')
<div class="jumbotron">
	<div class="container">
	@if(Auth::check())
	<div class="row">
	<div class="col-xs-9"><h3>Hola!, {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3></div>
		<div class="col-xs-4">{{ HTML::image('img/default_profile.jpg', 'profile', array('class' => 'img-circle')) }}</div>
		<div class="col-xs-6">
			<div class="page-header">
				<h3>Usuario &nbsp&nbsp<small>{{Auth::user()->username}}</small></h3>
				<h3>Correo &nbsp&nbsp<small>{{Auth::user()->email}}</small></h3>
				<a href="{{URL::to('user/'.Auth::user()->id.'/edit')}}"><button type="button" class="btn btn-default">Editar</button></a>
			</div>
		</div>
	</div>
	@endif
	</div>
</div>
</body>
</html>