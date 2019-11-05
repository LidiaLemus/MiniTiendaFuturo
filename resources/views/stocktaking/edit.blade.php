@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Detalle de Compra</h1>
        <form method="post" action="{{route('stocktaking.update',$stocktaking->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="quantity" placeholder="Cantidad" value="{{$stocktaking->quantity}}">
  </div>
  </div>

  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="description" placeholder="Descripcion" value="{{$stocktaking->description}}">
  </div>
  </div>

  
 
<select name="product_id" multiple size="3">
 @foreach($product as $product)
  
   <option value=" {{$product['id'] }}" 
   
   @if($product->id === $stocktaking->product_id )
            selected
            @endif
   >{{$product['name']}}</option>
   @endforeach 
 </select>
 
 
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   @endsection