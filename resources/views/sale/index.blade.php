@extends('home')
@section('content')
<div class="container">
        
        <div class="card-content">
		<div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('sale.create')}}">Realizar Venta</a>
 		</div>
         </div>

        <h1 class="title is-3">Ventas</h1>
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			<th>Fecha</th>
 			<th>Nombre del Empleado</th>
 			<th>Nombre del Cliente</th>
            <th>Total</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($sale as $sale)
 				<tr>
		<td>{{$sale->created_at}}</td>
		<td>{{$sale->employee->fullname}}</td>
		<td>{{$sale->customer->fullname}}</td>
		<td>{{$sale->total}}</td>
		<td><a class="button is-primary" href="{{route('sale.show',$sale->id)}}">Detalle Cliente</a>
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
