<table>
	<thead>
		<tr>		
			<th> Nombre</th>
			<th> Descripcion</th>
			<th> Imagen </th>	
		</tr>
	</thead>
	<tbody>		
		@foreach($categories as $category)
			<tr>				
				<td> {{ $category->name }} </td>
				<td> {{ $category->description }} </td>
				<td><img src="{{ public_path(). '/' . $category->image }}" width="40px"></td>
			</tr>
		@endforeach
	</tbody>
</table>