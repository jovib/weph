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
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('js/jquery.tablesorter.js')}}
{{HTML::script('js/jquery.tablesorter.widgets.js')}}
@include('layouts/navbar')
<div class="jumbotron">
	<div class="container">
	<h3>Hello, world!</h3>
		<div class="row">
			<div class="col-md-4"><img src="img/default_profile.jpg" alt="profile" class="img-circle"></div>
			<div class="col-md-8"><p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p></div>
		</div>
	</div>
</div>
</body>
</html>