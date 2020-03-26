@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
              <img src="{{ asset('imgs/login.png') }}" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">
                    <i class="fa fa-lock"></i>
                    Ingreso de Usuarios
                </h3>
                <hr>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="text-md-right">Correo Electrónico</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-md-right">Contraseña:</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-indigo btn-block">
                                <i class="fa fa-arrow-right"></i>
                                Ingresar
                            </button>
                        </div>
                    </form>
              </div>
            </div>

        </div>
    </div>
</div>
@endsection
