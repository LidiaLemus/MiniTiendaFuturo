@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Compra</h1>

         
        <form method="post" action="{{route('purchase.store')}}">
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="date" name="date" placeholder="Fecha de Compra" required>
  </div>
  
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="description" placeholder="Descripcion" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="total" placeholder="Total" required>
  </div>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('purchase.index')}}">Cancelar</a></td>
    </form>
        </div>
        </div>
    @endsection