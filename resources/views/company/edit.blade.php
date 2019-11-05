@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Compañia</h1>
        <form method="post" action="{{route('company.update',$company->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="name" placeholder="Nombre" value="{{$company->name}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="nit" placeholder="Nit" value="{{$company->nit}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="address" placeholder="Direccion" value="{{$company->address}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="Correo" value="{{$company->email}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Numero de Telefono" value="{{$company->phone}}">
  </div>
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   
@endsection