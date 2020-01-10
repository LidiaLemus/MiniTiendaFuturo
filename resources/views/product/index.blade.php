@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
			 <a class="button is-link is-pulled-right " href="{{route('product.create')}}">Agregar Producto</a>
			 
 		</div>
         </div>
			
		<h1 class="title is-3">Lista de Producto</h1>
		@include('product.search')
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>Codigo del Producto</th>
             <th>Nombre del Producto</th>
			 <th>Cantidad del Producto</th>
			 <th>Estado</th>
             <th>Precio de Venta</th>
 			<th>Precio de Compra</th>
 		</tr>
 		</thead>
 		<tbody>
			 @foreach($pro as $product)
			 @if($product->is_active===1)
 				<tr>
		<td>{{$product->code}}</td>
        <td>{{$product->name}}</td>
		<td>{{$product->stock}}</td>
		<td>{{$product->is_active}}</td>
        <td>{{$product->sale_price}}</td>
		<td>{{$product->purchase_price}}</td>
		<td><a class="button is-primary" href="{{route('product.show',$product->id)}}">Detalle Producto</a></td>
		
	</tr>
		 </tbody>
		 @endif 
		@endforeach
	
	 </table>
	
		</div>
		
		{!! $pro->render() !!}
		
        </div>
    @endsection