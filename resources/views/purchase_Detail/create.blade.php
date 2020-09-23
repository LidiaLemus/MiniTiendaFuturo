@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Detalle Compra</h1>


    <form method="post" action="{{route('purchase_Detail.store')}}">
      {{csrf_field() }}
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="quantity" placeholder="quantity" required>
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="price" placeholder="price" required>
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="subtotal" placeholder="subtotal" required>
        </div>
      </div>
      <br>
      <div class="select is-multiple">
        <h2>Compras</h2>
        <select name="purchase_id" multiple size="4">
          @foreach($purchase as $purchase)
          <option value=" {{$purchase['id'] }}"> {{$purchase['description']}}</option>
          @endforeach
        </select>
      </div>
      <div class="select is-multiple">
        <h2>Nombre proveedor</h2>
        <select name="provider_id" multiple size="4">
          @foreach($provider as $provider)
          <option value="{{$provider['id'] }}"> {{$provider['fullname']}}</option>
          @endforeach
        </select>
        </select>
      </div>
      <div class="select is-multiple">
        <h2>Nombre producto</h2>
        <select name="product_id" multiple size="4">
          @foreach($product as $product)
          <option value="{{$product['id'] }}"> {{$product['name']}}</option>
          @endforeach
        </select>
      </div>
      <br>
      <br>
      <button class="button is-success is-focused">Guardar</button>
      <a class="button is-danger" href="{{route('purchase_Detail.index')}}">Cancelar</a></td>
    </form>
    @endsection