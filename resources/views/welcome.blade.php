<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MiniTiendaFuturo</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      

       
    </head>
    <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="{{ url('/home') }}" class="navbar-item">
        Inicio
      </a>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="{{ route('register') }}" class="button is-primary">
            <strong>Regístrate</strong>
          </a>
          <a href="{{ route('login') }}" class="button is-light">
          iniciar sesión
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
    </body>
</html>
