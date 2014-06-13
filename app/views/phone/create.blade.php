<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Phonebook</title>
	</head>
	<body>
		<h1>Nuevo anie</h1>
		{{Form::open(array('url'=>'phone'))}}

			<div>
				{{Form::text('anie',Input::old('anie'), array('placeholder'=>'Extención'))}}

			</div>
			<div>
				{{Form::text('firstname',Input::old('firstname'), array('placeholder'=>'Nombre'))}}

			</div>
			<div>
				{{Form::text('lastname',Input::old('lastname'), array('placeholder'=>'Apellido'))}}

			</div>
			<div>
				{{Form::text('celular',Input::old('celular'), array('placeholder'=>'Celular'))}}
				
			</div>
			<div>
				{{Form::text('cargo',Input::old('cargo'), array('placeholder'=>'Cargo'))}}
				
			</div>
			<div>
				{{Form::text('Dep',Input::old('Dep'), array('placeholder'=>'Departamento'))}}
				
			</div>
			<div>
				{{Form::textarea('note',Input::old('note'), array('placeholder'=>'Observación'))}}
				
			</div>

			{{Form::submit('Salvar')}}

		{{Form::close()}}
	</body>
</html>