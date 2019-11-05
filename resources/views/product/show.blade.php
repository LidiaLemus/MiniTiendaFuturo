@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Producto</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
 				<td>Codigo Producto</td>
 				<td>Nombre Producto</td>
                 <td>Precio Venta</td>
                 <td>Precio Venta</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
	 			<td>{{$product->code}}</td>
	 			<td>{{$product->name}}</td>
                 <td>{{$product->sale_price}}</td>
                 <td>{{$product->purchase_price}}</td>
                
	 			<td><a class="button is-success button is-fullwidth" href="{{route('product.index')}}">Lista</a></td>
	 			<td><a class="button is-primary button is-fullwidth" href="{{route('product.edit',$product->id)}}">Editar</a></td>
	 		<td>
	 			<form method="post" action="{{route('product.destroy',$product->id)}}">
  	@csrf
  	@method('DELETE')
  	<button class="button is-danger">Borrar</button>
  	 </form>


	 		</td>
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
   @endsection
