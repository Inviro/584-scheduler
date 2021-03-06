<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class={{$dark_mode ? "bg-dark" : "bg-white"}}>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KhroNotes | Online Scheduling App</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" defer></script>
    {{-- <script src="" defer></script> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <div id="app" class="{{$dark_mode ? "bg-secondary" : ""}}">
      <nav class="navbar navbar-expand-md shadow-sm {{ $dark_mode ? "navbar-dark bg-dark" : "navbar-light bg-white"}}">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/home') }}">
            <!-- {{ str_replace('_', ' ', config('app.name', 'Laravel')) }} -->
            <button class="logo_button {{ $dark_mode ? "text-light bg-dark" : "" }}" style="font-size:36px; border: none;">KhroNotes</button>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>
    
            <!-- center of nav -->
            <!-- <ul class="navbar-nav mc-auto">
                          <img class="logo_image" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" />
                      </ul> -->
    
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
              @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @endif
    
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/home"><i class="fa fa-sm fa-home" aria-hidden="true"></i>&nbsp;Home</a>
                  <a class="dropdown-item" href="/settings"><i class="fa fa-sm fa-cog" aria-hidden="true"></i>&nbsp;Settings</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" style="color:red;font-weight:bold;" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                    <i class="fa fa-sm fa-sign-out" aria-hidden="true"></i>&nbsp;Logout
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
  
      <main id="main-content" class="py-4">
        @yield('content')
      </main>
    </div>
    <footer id="footer" class="footer {{ $dark_mode ? "text-light bg-dark" : "bg-white" }} border-top">
      <br>
      <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" width="25px" />
      <br>
      &copy;2021 KhroNotes
    </footer>
  </body>
</html>