@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Compra</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
			 <td>No</td>
 			<td>Descripcion</td>
            <td>Cantidad</td>
            <td>Precio de Compra</td>
            <td>subtotal</td>
			

 			</tr>
 			
 		</thead>

 		<tbody>
      
 				<tr>
				 <td>{{$purchase_Detail->id}}</td>
		<td>{{$purchase_Detail->purchase->description}}</td>
        <td>{{$purchase_Detail->quantity}}</td>
        <td>{{$purchase_Detail->product->purchase_price}}</td>
        <td>{{$purchase_Detail->subtotal}}</td>
		
        <td><a class="button is-success button is-fullwidth" href="{{route('purchase_Detail.index')}}">Lista de compras</a></td>
		<td><a class="button is-primary button is-fullwidth" href="{{route('purchase_Detail.edit',$purchase_Detail->id)}}">Editar</a></td>
	 		
	 	
	 			
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
   @endsection