<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte en PDF</title>
	<style>
		body {
			font-family: Helvetica;
		}
		table {
			border-collapse: collapse;
		}
		table th,
		table td {
			font-size: 14px !important;
		}
		table th {
			background-color: gray;
			color: white;
			text-align: center;
		}
		table td {
			border: 1px solid silver;
			padding: 10px;
		}
	</style>
</head>
<body>
	<table>
	<thead>
		<tr>
			<th> Foto </th>
			<th> Nombre </th>
			<th> Descripcion </th>
		</tr>
	</thead>
	@foreach($categories as $category)
		<tr>
			<td><img src="{{ public_path(). '/' . $category->image }}" width="40px"></td>
			<td> {{ $category->name }} </td>
			<td> {{ $category->description }} </td>					
		</tr>
	@endforeach
</table>
</body>
</html>