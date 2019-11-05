@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro venta</h1>

         
        <form method="post" action="{{route('sale.store')}}">
    {{csrf_field() }}

   
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="total" placeholder="Total" required>
  </div>
  <br>
  <div class="select is-multiple">
  <h2>Lista de Empleados</h2>
 <select name="employee_id" multiple size="4">
 @foreach($employee as $employee)
   <option value=" {{$employee['id'] }}"> {{$employee['fullname']}}</option>
   @endforeach 
 </select>
 </div>
 <div class="select is-multiple">
 <h2>Lista de Clientes</h2>
 <select name="customer_id" name="employee_id" multiple size="4">
  @foreach($customer as $customer)
    <option value= "{{$customer['id'] }}"> {{$customer['fullname']}}</option>
    @endforeach
 </select>
 </div>
  <br>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('sale.index')}}">Cancelar</a></td>

    </form>
@endsection