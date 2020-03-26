<table>
	<thead>
		<tr>
			<th> Foto </th>
			<th> Nombre Completo </th>
			<th> Correo Electrónico </th>
			<th> Telefóno </th>
			<th> Fecha Nacimiento </th>
			<th> Genero </th>
			<th> Dirección </th>	
		</tr>
	</thead>
	<tbody>		
		@foreach($users as $user)
			<tr>
				<td><img src="{{ public_path(). '/' . $user->photo }}" width="40px"></td>
				<td> {{ $user->fullname }} </td>
				<td> {{ $user->email }} </td>
				<td> {{ $user->phone }} </td>
				<td> {{ $user->birthdate }} </td>
				<td> {{ $user->gender }} </td>
				<td> {{ $user->address }} </td>			
			</tr>
		@endforeach
	</tbody>
</table>