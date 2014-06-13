<!DOCTYPE html>
<html lang="es">
<head>
	<meta chaset="uft-8">
	<title>Phonebook</title>
</head>
<body>
<h1>Editando {{$phone->firstname}} {{$phone->firstname}}</h1>
	{{Form::model($phone, array('route'=>array('phone.update', $phone->phone_id), 'method'=>'PUT'))}}
		<div>
			{{Form::text('anie', null)}}
		</div>
		<div>
			{{Form::text('firstname', null)}}
		</div>
		<div>
			{{Form::text('lastname', null)}}
		</div>
		<div>
			{{Form::text('celular', null)}}
		</div>
		<div>
			{{Form::text('cargo', null)}}
		</div>
		<div>
			{{Form::text('Dep', null)}}
		</div>
		<div>
			{{Form::textarea('note', null)}}
		</div>
		{{Form::submit('salvar')}}
	{{Form::close()}}
</body>
</html>