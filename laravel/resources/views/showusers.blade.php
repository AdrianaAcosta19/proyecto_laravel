<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<table class="table table-dark table-hover table-striped">
					<thead class="bg-white text-dark">
						<tr>
							<th>Nombre Completo</th>
							<th>Correo Electrónico</th>
							<th>Teléfono</th>
							<th>Fecha Nacimiento</th>
							<th>Genero</th>
							<th>Dirección</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->fullname }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
								<td>{{ $user->birthdate }}</td>
								<td>{{ $user->gender }}</td>
								<td>{{ $user->address }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>




