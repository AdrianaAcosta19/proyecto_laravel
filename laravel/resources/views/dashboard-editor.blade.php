@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('imgs/mydata.svg') }}" class="card-img-top" height="240px">
              <div class="card-body">
                <a href="{{ url('users/'.Auth::user()->id.'/edit') }}" class="btn btn-indigo btn-block">Mi Perfil</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('imgs/myarticles.svg') }}" class="card-img-top" height="240px">
              <div class="card-body">
                <a href="{{ url('articles') }}" class="btn btn-indigo btn-block">Mis Articulos</a>
              </div>
            </div>
        </div>        
    </div>
</div>
@endsection