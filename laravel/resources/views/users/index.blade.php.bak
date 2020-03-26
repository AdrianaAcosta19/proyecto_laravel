@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <a href="{{ url('users/create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> 
            Adicionar Usuario
          </a>
          <br><br>
          
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
                        <a href="" class="btn btn-indigo btn-sm">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="" class="btn btn-indigo btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
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
