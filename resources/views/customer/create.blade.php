@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Cliente</h1>

         
        <form method="post" action="{{route('customer.store')}}">
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="fullname" placeholder="Nombre completo" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="correo" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="address" placeholder="Direccion" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Numero de telefono" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="nit" placeholder="Nit" required>
  </div>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('customer.index')}}">Cancelar</a></td>
    </form>
        </div>
        </div>
   @endsection