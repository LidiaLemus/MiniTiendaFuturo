@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Registro Producto</h1>

    <form method="post" action="{{route('product.store')}}">
      {{csrf_field() }}

      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="code" placeholder="Codigo del Producto" required
            oninvalid="this.setCustomValidity('Por favor ingresa codigo de producto')">
        </div>
        <div class="field">
          <div class="control">
            <input class="input is-primary" type="text" name="name" placeholder="Nombre del Producto" required
              oninvalid="this.setCustomValidity('Por favor ingresa nombre de producto')">
          </div>

          <div class="field">
            <div class="control">
              <input class="input is-primary" type="text" name="stock" placeholder="Cantidad de producto" required
                oninvalid="this.setCustomValidity('Por favor ingresa cantidad de producto')">
            </div>
          </div>
          <div class="field">
            <div class="control">
              <input class="input is-primary" type="text" name="sale_price" placeholder="Precio de Venta" required
                oninvalid="this.setCustomValidity('Por favor ingresa Precio de venta')">
            </div>
            <div class="field">
              <div class="control">
                <input class="input is-primary" type="text" name="purchase_price" placeholder="Precio de Compra"
                  required oninvalid="this.setCustomValidity('Por favor ingrrds Precio de Compra')">
              </div>

              <br>
              <button class="button is-success is-focused">Guardar</button>
              <a class="button is-danger" href="{{route('product.index')}}">Cancelar</a></td>
    </form>
  </div>
</div>
@endsection