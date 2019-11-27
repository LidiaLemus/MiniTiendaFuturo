@extends('home')
@section('content')

<div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('purchase.create')}}">Registrar compra</a>
 		</div>
         </div>

        <h1 class="title is-3">Compras</h1>
        <table class="table is-striped">
 		<thead>
 			<tr>
 				<th>Fecha</th>
            	<th>Descripcion</th>
		   		<th>Total</th>
 			</tr>
 		</thead>
 		<tbody>
			 @foreach($purchase as $purchase)
			 <tr>
					<td>{{$purchase->created_at}}</td>
					<td>{{$purchase->total}}</td>
					<td><a class="button is-primary" href="{{route('purchase.show',$purchase->id)}}">Detalle compra</a></td>
				</tr>
				@endforeach  
		</tbody>
 		</table>
        </div>
        </div>
    
@endsection