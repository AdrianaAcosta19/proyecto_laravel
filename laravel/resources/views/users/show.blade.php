@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="h3">
              <i class="fa fa-search"></i>
              Consultar Usuario
            </h1>
            <hr>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultar Usuario</a></li>
                        </ol>
                    </nav>

                    <table class="table table-hover table-bordered table-striped">
                        <tr>
                            <td colspan="2" class="text-center">
                                <img class="img-thumbnail" src="{{ asset($user->photo) }}" width="200pt">
                            </td>
                        </tr>
                        <tr>
                            <th>Nombre Completo</th>
                            <td>{{ $user->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Correo Electrónico</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>Fecha Nacimiento</th>
                            <td>
                                {{ $user->birthdate }}
                                &nbsp; | &nbsp;
                                @php use \Carbon\Carbon; @endphp
                                {{ Carbon::createFromDate($user->birthdate)->diff(Carbon::now())->format('%y años, %m meses y %d dias') }}
                            </td>
                        </tr>
                        <tr>
                            <th>Genero</th>
                            <td>
                                @if ($user->gender == "Female")
                                    
                                    Mujer
                                
                                @else
                                    
                                    Hombre

                                @endIf
                            </td>
                        </tr>
                        <tr>
                            <th>Dirección</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
        </div>
    </div>
</div>
@endsection
