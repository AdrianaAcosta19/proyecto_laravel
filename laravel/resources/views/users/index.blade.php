@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <a href="{{ url('users/create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> 
            Adicionar Usuario
          </a>
          <a href="{{ url('import/view/users') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> 
            Importar Usuarios
          </a>
          <a href="{{ url('generate/pdf/users') }}" class="btn btn-indigo">
            <i class="fa fa-file-pdf"></i> 
            Generar Reporte
          </a>
          <a href="{{ url('generate/excel/users') }}" class="btn btn-indigo">
            <i class="fa fa-file-excel"></i> 
            Generar Excel
          </a>

          <br><br>
          
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Usuarios</a></li>
              </ol>
            </nav>

            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nombre Completo</th>
                    <th class="d-none d-sm-table-cell">Correo Electrónico</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->fullname }}</td>
                      <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                      <td><img src="{{ asset($user->photo) }}" width="40px"></td>
                      <td>
                        <a href="{{ url('users/'.$user->id) }}" class="btn btn-indigo btn-sm">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-indigo btn-sm">
                          <i class="fa fa-pen"></i>
                        </a>
                        <form action="{{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
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
                    <td colspan="4">{{ $users->links() }}</td>
                  </tr>
                </tfoot>
            </table>
            
        </div>     
    </div>
</div>
@endsection
