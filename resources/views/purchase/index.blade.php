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
        <table class="table is-fullwidth is-striped is-hoverable ">
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
		<td>{{$purchase->date}}</td>
        <td>{{$purchase->description}}</td>
		<td>{{$purchase->total}}</td>
		<td><a class="button is-primary" href="{{route('purchase.show',$purchase->id)}}">Detalle compra</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
        </div>
        </div>
            </div>

        </div>
@endsection