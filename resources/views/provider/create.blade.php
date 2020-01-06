@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Proveedor</h1>

         
        <form method="post" action="{{route('provider.store')}}">
    {{csrf_field() }}

   
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="fullname" placeholder="Nombre Completo" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Numero de Telefono" required>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="Correo Electronico" required>
  </div>
  <br>
  <div class="select is-multiple">
 <select name="company_id" multiple size="4">
 @foreach($company as $company)
   <option value=" {{$company['id'] }}"> {{$company['name']}}</option>
   @endforeach 
 </select>
 </div>
  </div>
 <br>
 <br>
 <br>
  <br>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('provider.index')}}">Cancelar</a></td>

    </form>


        </div>
        </div>
   @endsection
