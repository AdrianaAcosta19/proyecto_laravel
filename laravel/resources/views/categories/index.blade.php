@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <a href="{{ url('categories/create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> 
            Adicionar Categoria
          </a>
          <a href="{{ url('generate/pdf/categories') }}" class="btn btn-indigo">
            <i class="fa fa-file-pdf"></i> 
            Generar Reporte
          </a>
          <a href="{{ url('generate/excel/categories') }}" class="btn btn-indigo">
            <i class="fa fa-file-excel"></i> 
            Generar Excel
          </a>

          <br><br>
          
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Categorias</a></li>
              </ol>
            </nav>

            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th class="d-none d-sm-table-cell">Descripcion</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->name }}</td>
                      <td class="d-none d-sm-table-cell">{{ $category->description }}</td>
                      <td><img src="{{ asset($category->image) }}" width="40px"></td>
                      <td>
                        <a href="{{ url('categories/'.$category->id) }}" class="btn btn-indigo btn-sm">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-indigo btn-sm">
                          <i class="fa fa-pen"></i>
                        </a>
                        <form action="{{ url('categories/'.$category->id) }}" method="post" style="display: inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-danger btn-sm btn-delete">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="4"><!--{{ $categories->links() }}--></td>
                  </tr>
                </tfoot>
            </table>
            
        </div>     
    </div>
</div>
@endsection
