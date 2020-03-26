<table>
	<thead>
		<tr>		
			<th> Nombre</th>
			<th> Descripcion</th>
			<th> Usuario</th>
			<th> Categoria</th>
			<th> Imagen </th>	
		</tr>
	</thead>
	<tbody>		
		@foreach($articles as $article)
			<tr>				
				<td> {{ $article->name }} </td>
				<td> {{ $article->description }} </td>				
				@foreach($users as $user)
					@if ($article->user_id == $user->id)
						<td> {{ $user->fullname }} </td>
					@endif	
				@endforeach
				@foreach($categories as $category)
					@if ($article->category_id == $category->id)
						<td> {{ $category->name }} </td>				
					@endif
				@endforeach	
				<td><img src="{{ public_path(). '/' . $article->image }}" width="40px"></td>
			</tr>
		@endforeach
	</tbody>
</table>