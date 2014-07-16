<h1 class="page-header">Directorio</h1>
<table class="table table-hover">
	<thead>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>CORREO</th>
	</thead>
	<tbody>
	@foreach ($user as $key => $value)
		<tr>
			<td>{{$value->firstname}}</td>
			<td>{{$value->lastname}}</td>
			<td>{{$value->mail}}</td>
		</tr>
	</tbody>
</table>