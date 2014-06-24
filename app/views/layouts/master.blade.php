<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="utf-8">
	<title>Phonebook</title>
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/app.css')}}
	{{HTML::style('http://fonts.googleapis.com/css?family=Oxygen:300')}}
</head>
<body>
{{HTML::script('js/jquery1-11-0.min.js')}}
{{HTML::script('js/bootstrap.js')}}
{{HTML::script('js/jquery.tablesorter.js')}}
{{HTML::script('js/jquery.tablesorter.widgets.js')}}
@include('layouts/navbar')
<div class="container-fluid">
	<div class="row">
		@include('layouts/sidebar')
		@include('layouts/cont')
	</div>
</div>
@include('layouts/footer')
</body>
</html>