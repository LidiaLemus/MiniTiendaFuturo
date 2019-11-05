@extends('home')
@section('content')
<div class="container">
        
        <div class="card-content">
		<div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('purchase_Detail.create')}}">Generar Detalle compra</a>
 		</div>
         </div>

        <h1 class="title is-3"> Detalle Compra</h1>
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>No</th>
 			<th>Descripcion</th>
            <th>Cantidad</th>
            <th>Precio de Compra</th>
            <th>subtotal</th>
			
            
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($purchase_Detail as $purchase_Detail)
 				<tr>
					<td>{{$purchase_Detail->id}}</td>
					<td>{{$purchase_Detail->purchase->description}}</td>
					<td>{{$purchase_Detail->quantity}}</td>
					<td>{{$purchase_Detail->product->purchase_price}}</td>
					<td>{{$purchase_Detail->subtotal}}</td>
		
	
				</tr>
			@endforeach  
 		</tbody>
 	</table>
        </div>
        </div>
            </div>

        </div>
@endsection
