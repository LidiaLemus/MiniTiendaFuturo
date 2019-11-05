
    @extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Producto</h1>
        <form method="post" action="{{route('product.update',$product->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="code" placeholder="Codigo Producto" value="{{$producto->code}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="name" placeholder="Nombre Producto" value="{{$product->name}}"">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="sale_price" placeholder="Precio Venta" value="{{$product->sale_price}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="purchase_price" placeholder="Precio Compra" value="{{$product->purchase_price}}">
  </div>
  
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   @endsection
