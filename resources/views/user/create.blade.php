@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Usuario</h1>

         
        <form method="post" action="{{route('user.store')}}" autocomplete="off">
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="name" placeholder="Nombre completo" required>
  </div>
  <div class="field">
    <div class="control">
      <input class="input is-primary" type="text" name="address" placeholder="Direccion" required>
    </div>
    </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="numero de telefono" required>
  </div>
  </div>

  <div class="field">
  <div class="control">
    <input class="input is-primary" type="email" name="email" placeholder="Correo Electronico" required>
  </div>
  
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="password" name="password" placeholder="Contraseña" required>
  </div>
  </div>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('user.index')}}">Cancelar</a></td>
    </form>
        </div>
        </div>
   @endsection