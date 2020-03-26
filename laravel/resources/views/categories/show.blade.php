@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="h3">
              <i class="fa fa-search"></i>
              Consultar Categoria
            </h1>
            <hr>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('categories') }}">Lista de Categorias</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultar Categoria</a></li>
                        </ol>
                    </nav>

                    <table class="table table-hover table-bordered table-striped">
                        <tr>
                            <td colspan="2" class="text-center">
                                <img class="img-thumbnail" src="{{ asset($category->image) }}" width="200pt">
                            </td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <th>Descripcion</th>
                            <td>{{ $category->description }}</td>
                        </tr>                        
                    </table>
        </div>
    </div>
</div>
@endsection
