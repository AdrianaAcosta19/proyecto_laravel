<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-indigo shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li>
                                <a class="nav-item nav-link" href="{{ url('home') }}">
                                    <i class="fa fa-home"></i>
                                    Inicio
                                </a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa fa-lock"></i> 
                                    Ingreso
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="fa fa-user"></i> 
                                        Registro
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset(Auth::user()->photo) }}" class="rounded-circle border border-light" width="50px">
                                    {{ Auth::user()->fullname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ url('users') }}" class="dropdown-item">
                                        <i class="fa fa-users"></i>
                                        Módulo Usuarios
                                    </a>
                                    <a href="{{ url('categories') }}" class="dropdown-item">
                                        <i class="fa fa-list"></i>
                                        Módulo Categorías
                                    </a>
                                    <a href="{{ url('articles') }}" class="dropdown-item">
                                        <i class="fa fa-newspaper"></i>
                                        Módulo Artículos
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
    

    <script>
        $(document).ready(function() {

            $('.btn-delete').click(function(event) {

                Swal.fire({
                  title: 'Esta usted seguro?',
                  text: "Desea Eliminar este registro!",//+ $(this).name,
                  icon: 'error',
                  showCancelButton: true,
                  confirmButtonColor: '#38c172',
                  cancelButtonColor: '#e3342f',
                  confirmButtonText: 'Aceptar',
                  cancelButtonText: 'Cancelar'
                    }).then((result) => {
                      if (result.value) {
                        $(this).parent().submit();
                      }
                    })

            });

            // -----------------------------------------------
            @if (session('message'))
                Swal.fire(
                  'Felicitaciones',
                  '{{ session('message') }}',
                  'success'
                );
            @endif
            // -----------------------------------------------
            $('.btn-upload').click(function(event) {
                $('#photo').click();
            });

            $('.btn-upload-img').click(function(event) {
                $('#image').click();
            });
            // -----------------------------------------------
            $('#photo').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#image').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
            // -----------------------------------------------
        });
    </script>
</body>
</html>
