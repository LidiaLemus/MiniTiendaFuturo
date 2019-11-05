@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro Inventario</h1>

         
        <form method="post" action="{{route('stocktaking.store')}}">
    {{csrf_field() }}

   
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="quantity" placeholder="Cantidad de producto" required>
  </div>
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="description" placeholder="Descripcion" required>
  </div>
  </div>
  <br>
  <div class="select is-multiple">
  <h2>Producto</h2>
 <select name="product_id" multiple size="4">
 @foreach($product as $product)
   <option value=" {{$product['id'] }}"> {{$product['name']}}</option>
   @endforeach 
 </select>
 </div>
  <br>
  <br>
  <button class="button is-success is-focused">Guardar</button>
  <a class="button is-danger" href="{{route('stocktaking.index')}}">Cancelar</a></td>

    </form>
@endsection