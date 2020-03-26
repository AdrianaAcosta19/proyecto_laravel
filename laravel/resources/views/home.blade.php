@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('imgs/users.png') }}" class="card-img-top" height="240px">
              <div class="card-body">
                <a href="{{ url('users') }}" class="btn btn-indigo btn-block">Módulo Usuarios</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('imgs/categories.png') }}" class="card-img-top" height="240px">
              <div class="card-body">
                <a href="{{ url('categories') }}" class="btn btn-indigo btn-block">Módulo Categorías</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('imgs/articles.png') }}" class="card-img-top" height="240px">
              <div class="card-body">
                <a href="{{ url('articles') }}" class="btn btn-indigo btn-block">Módulo Artículos</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
