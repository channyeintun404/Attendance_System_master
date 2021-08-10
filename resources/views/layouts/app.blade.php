<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Emplyoee Attendance System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: red;
           color: white;
           text-align: center;
        }
        </style>
</head>
<body>
    
    
        <nav class="navbar navbar-expand-md navbar-dark bg-primary ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Employee Attendance System') }} --}}
                    Employee Attendance System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav mr-auto">
                       Welcome  {{ Auth::user()->name }}
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}

                               
                                <li class="nav-item">
                                    <a class="nav-link" href=""> Profile</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
                                    <img src="{{ asset('img/user.png')}}" class="rounded-circle" alt="Cinque Terre" style="height: 50px;width:50px;">
                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
                                    <a class="dropdown-item" href=" ">
                                        Home
                                    </a>

                                    <a class="dropdown-item" href=" ">
                                        Profile
                                    </a>

                                    <a class="dropdown-item" href=" ">
                                        Attendance Log
                                    </a>

                                    {{-- for admin    --}}
                                    <a class="dropdown-item" href=" ">
                                        Attendace List
                                    </a>
                                    <a class="dropdown-item" href=" ">
                                        Employee List
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   
   
        <!-- ======= Header ======= -->


        <main class="py-4">
            @yield('content')
        </main>

         <!-- ======= Footer ======= -->



  <div class="navbar navbar-inverse navbar-fixed-bottom">
          <div class="container">
               <div class="copyright">
            &copy; Copyright <strong><span> Rivawes Co.,ltd</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
           
            Designed by <a href="">Group</a>
          </div>
          </div>
        </div>


    

     <script src="{{ asset('js/bootstrap.min.js') }}" type="javascriptss"></script>
     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
