<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="utf-8">
	<title>@yield('title') - Phonebook</title>
	{{HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')}}
	{{HTML::style('css/app.css')}}
	{{HTML::style('http://fonts.googleapis.com/css?family=Lato')}}
</head>
<body>
{{HTML::script('js/jquery1-11-0.min.js')}}
{{HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
{{HTML::script('js/jquery.tablesorter.js')}}
{{HTML::script('js/jquery.tablesorter.widgets.js')}}
@include('layouts/navbar')
<div class="container-fluid">
	<div class="row">
		@include('layouts/cont')
	</div>
</div>
</body>
</html>