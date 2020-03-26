@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="h3">
              <i class="fa fa-pen"></i>
              Modificar Categoria
            </h1>
            <hr>
            <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('categories') }}">Lista de Categorias</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modificar Categoria</a></li>
                        </ol>
                    </nav>

            <form action="{{ url('categories/'.$category->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <label for="name" class="text-md-right">Nombre</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name) }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="text-md-right">Descripcion</label>

                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $category->description) }}" autocomplete="description" autofocus>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="text-md-right">Imegen</label>

                            <button class="btn btn-indigo btn-block btn-upload-img" type="button"> 
                                <i class="fa fa-upload"></i> 
                                Seleccionar Imagen
                            </button>
                            <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror d-none" name="image" accept="image/*">

                            <br>
                            <div class="text-center @error('image') is-invalid @enderror"> 
                              <img src="{{ asset($category->image) }}" id="preview" class="img-thumbnail" width="120px">
                            </div>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-indigo btn-block">
                                <i class="fa fa-save"></i>
                                Modificar
                            </button>
                        </div>
            </form>
        </div>
    </div>
</div>
@endsection
