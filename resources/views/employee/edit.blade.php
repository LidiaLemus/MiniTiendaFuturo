@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Empleado</h1>
        <form method="post" action="{{route('employee.update',$employee->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="fullname" placeholder="Nombre completo" value="{{$employee->fullname}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="address" placeholder="Direccion" value="{{$employee->address}}"">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Numero de Telefono" value="{{$employee->phone}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="Correo Electronico" value="{{$employee->email}}">
  </div>
 </div>
 <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="cui" placeholder="Numero de CUI" value="{{$employee->cui}}">
  </div>
 </div>
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   @endsection