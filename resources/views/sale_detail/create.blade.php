@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Detalle venta</h1>


    <form method="post" action="{{route('sale_detail.store')}}">
      {{csrf_field() }}
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="price" placeholder="Precio" required>
        </div>
        <div class="field">
          <div class="control">
            <input class="input is-primary" type="text" name="quantity" placeholder="cantidad" required>
          </div>
          <div class="field">
            <div class="control">
              <input class="input is-primary" type="text" name="subtotal" placeholder="Subtotal" required>
            </div>
            <div><input name="sale_id" type="number"></div>
            <div class="select is-multiple">
              <h2>Nombre producto</h2>
              <select name="product_id" multiple size="4">
                @foreach($product as $product)
                <option value="{{$product['id'] }}"> {{$product['name']}}</option>
                @endforeach
              </select>

              <br>
              <button class="button is-success is-focused">Guardar</button>
              <a class="button is-danger" href="{{route('sale_detail.index')}}">Cancelar</a></td>
    </form>
  </div>
</div>
@endsection