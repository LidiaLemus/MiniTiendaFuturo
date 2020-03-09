<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MiniTiendaFuturo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="path/to/easy-autocomplete.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
  
   
   <nav class="navbar is-info is-left" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
      <img src="{{ asset('imagenes/imagen.jpg') }}" width="100" height="120">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'MiniTiendaFuturo') }}
      </a>
     
                                    
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        @guest
        <a class="button is-light" href="{{ route('login') }}">
          Iniciar Sesión
          </a>
          
          @else
          
          <div class="fiel">
          <div class="control  has-icons-left">
          
          <a  class="button is-danger is-focused" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      
                                    </a>
                                    <span class="icon is-small is-left"><i class="fas fa-sign-out-alt"></i></span>
          
          </div>
          
          </div>
         
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                    @if (Route::has('register'))
          <a class="button is-primary" href="{{ route('register') }}">
            <strong>Regístrate</strong>
          </a>
          @endif
                                    @endguest
        </div>
      </div>
    </div>
  </div>
</nav>
   

   </div>
   
<script>

document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});


</script>

        <div class="container">
        <div class="columns">
        <div class="column is-one-fifth">@yield('aside')</div>
        <div class="column"> @yield('content')</div>
        </div>
        </div>        
           
        
    </div>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    
</body>
</html>
