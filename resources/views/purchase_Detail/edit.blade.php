@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Detalle de Compra</h1>
        <form method="post" action="{{route('purchase_Detail.update',$purchase_Detail->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="quantity" placeholder="Cantidad" value="{{$purchase_Detail->quantity}}">
  </div>
  </div>

  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="price" placeholder="Precio" value="{{$purchase_Detail->price}}">
  </div>
  </div>

  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="subtotal" placeholder="Subotal" value="{{$purchase_Detail->subtotal}}">
  </div>
  </div>
 
<select name="purchase_id" multiple size="3">
 @foreach($purchase as $purchase)
  
   <option value=" {{$purchase['id'] }}" 
   
   @if($purchase->id === $purchase_Detail->purchase_id )
            selected
            @endif
   >{{$purchase['description']}}</option>
   @endforeach 
 </select>
 <select name="provider_id" multiple size="3">
 @foreach($provider as $provider)
  
   <option value=" {{$provider['id'] }}" 
   
   @if($provider->id === $purchase_Detail->provider_id )
            selected
            @endif
   >{{$provider['fullname']}}</option>
   @endforeach 
 </select>
 </div>
 <select name="product_id" multiple size="3">
 @foreach($product as $product)
  
   <option value=" {{$product['id'] }}" 
   
   @if($product->id === $purchase_Detail->product_id )
            selected
            @endif
   >{{$product['name']}}</option>
   @endforeach 
 </select>
 </div>
 
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   @endsection