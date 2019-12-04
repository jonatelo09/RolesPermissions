<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
      <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
      <link href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
      <!-- Argon CSS -->
      <link type="text/css" href="{{asset('css/argon.css?v=1.0.0')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('tickets.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tickets.index')}} ">Tickets</a>
                        </li>
                        @endcan
                        @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index')}} ">Usuarios</a>
                        </li>
                        @endcan
                        @can('roles.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index')}} ">Roles</a>
                        </li>
                        @endcan
                        @can('categories.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index')}} ">Categorias</a>
                        </li>
                        @endcan
                        @can('clients.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clients.index')}} ">Departamentos</a>
                        </li>
                        @endcan
                        @can('problems.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('problems.index')}} ">Problemas</a>
                        </li>
                        @endcan
                        @can('statuses.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('statuses.index')}} ">Status</a>
                        </li>
                        @endcan
                        @can('turns.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('turns.index')}} ">Turno</a>
                        </li>
                        @endcan
                        @can('priorities.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('priorities.index')}} ">Prioridad</a>
                        </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                      <img alt="Image placeholder" src="{{asset('img/team-1-800x800.jpg')}}">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                      <span class="mb-0 text-sm  font-weight-bold"> {{ auth()->user()->name}} </span>
                                    </div>
                                  </div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                  <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                                  </div>
                                  <a href="#" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Mi Perfil</span>
                                  </a>
                                  <a href="#" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Configuraciones</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href=" {{route('logout')}} " onclick="event.preventDefault(); document.getElementById('formLogout').submit();" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                  </a>
                                    <form action="{{ route('logout')}} " method="POST" style="display: none;" id="formLogout">
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
            @if(session('info'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info')}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @yield('content')
        </main>
    </div>

 <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('js/argon.js?v=1.0.0')}}"></script>
</body>
</html>
