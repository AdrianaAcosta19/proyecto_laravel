@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card bg-light mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Importar Usuarios</a></li>
                </ol>
            </nav>                
            <div class="card-header">
                Importar Usuarios
            </div>
            <div class="card-body">
                <form id="formImportar" action="{{ url('import/excel/users') }}" method="POST" enctype="multipart/form-data" style="display: inline-block;">
                    @csrf
                    <input type="file" class="d-none" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" >
                    <button type="button" class="btn btn-success btn-excel">
                        <i class="fa fa-file-excel"></i> 
                        Importar Usuarios
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection