<!doctype html>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-uppercase text-bold" href="/"><i class="fas fa-book-reader me-2 "></i>wiki</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        @if(!Auth::guest())

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Inicio</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('wikis.index') }}"><i class="fas fa-book me-2"></i>Wikis</a>
                        </li>
                        @if(Auth::user()->role->name == 'Administrador')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('roles.index') }}"><i class="fas fa-user-shield me-2"></i>Roles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}"><i class="fas fa-users me-2"></i>Usuarios</a>
                        </li>
                        @endif
                        @endif
                    </ul>


                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-users-cog me-2"></i>Opciones de usuario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


                                @guest

                                @if (Route::has('login'))
                                <li> <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>



                                @endif


                                @else
                                <li> <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>




                                </li>
                                @endguest


                            </ul>
                        </li>

                    </ul>


                </div>
            </div>
        </nav>



        <main class="py-4 ">
            @yield('content')
        </main>
    </div>
</body>

</html>