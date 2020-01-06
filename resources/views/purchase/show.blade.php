@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Compra</h1>

			   <table class="table is-fullwidth is-striped is-hoverable">
				<thead>
					<tr>
						<th>Proveedor</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Producto</th>
					   <th>Subtotal</th>	 
					</tr>
					
				</thead>
	   
				<tbody>
					@foreach($detail as $d)
				<tr>
					<td>{{$d->fullname}}</td>
					<td>{{$d->price}}</td>
					<td>{{$d->quantity}}</td>
					<td>{{$d->nombres}}</td>
		      		<td>{{$d->subtotal}}</td>
			    </tr>
			
			</tbody>
		@endforeach 
	   </table>
	   <label class="label">Total</label>
	   <input class="input" value="{{$pur->total}}" readonly><br><br>  
	   <td><a class="button is-success button is-fullwidth" href="{{route('purchase.index')}}">Lista</a></td>
			   </div>
			   </div>
   @endsection