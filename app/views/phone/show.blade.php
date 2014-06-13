<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Phonebook</title>
</head>
<body>
<h1>{{$phone->firstname}} {{$phone->lastname}}</h1>
	<p>
		<strong>Extención:</strong> {{$phone->anie}}<br>
		<strong>Celular:</strong> {{$phone->celular}}<br>
		<strong>Cargo:</strong> {{$phone->cargo}}<br>
		<strong>Departamento:</strong> {{$phone->Dep}}<br>
		<strong>Observación:</strong> {{$phone->note}}<br>
	</p>
</body>
</html>