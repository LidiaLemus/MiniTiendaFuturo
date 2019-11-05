@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Compañia</h1>

         
        <form method="post" action="{{route('company.store')}}">
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="name" placeholder="Nombre" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="nit" placeholder="Nit" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="address" placeholder="Direccion" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="Correo Electronico" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Numero de Telefono" required>
  </div>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('company.index')}}">Cancelar</a></td>
    </form>
        </div>
        </div>
    @endsection
