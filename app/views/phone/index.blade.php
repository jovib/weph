<!DOCTYPE html>
<html lang="es">
<head>
	<meta chaset="uft-8">
	<title>Phonebook</title>
</head>
<body>
<h1>Directorio</h1>
<table>
	<thead>
		<th>ANIE</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
	</thead>
	<tbody>
	@foreach ($phone as $key => $value)
		<tr>
			<td><a href="{{URL::to('phone/'.$value->phone_id)}}">{{$value->anie}}</a></td>
			<td>{{$value->firstname}}</td>
			<td>{{$value->lastname}}</td>
			<td><a href="{{URL::to('phone/'.$value->phone_id.'/edit')}}">Editar</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
</body>
</html>