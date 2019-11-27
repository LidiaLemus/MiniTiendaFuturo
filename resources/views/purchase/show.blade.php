@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Compra</h1>

			   <table class="table is-fullwidth is-striped is-hoverable">
				<thead>
					<tr>
						<td>Proveedor</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Producto</td>
					   <td>Subtotal</td>	 
					</tr>
					
				</thead>
	   
				<tbody>
					<tr>
					@foreach($detail as $d)
					<td>{{$d->fullname}}</td>
					<td>{{$d->price}}</td>
					<td>{{$d->quantity}}</td>
					<td>{{$d->nombres}}</td>
					<td>{{$d->subtotal}}</td>
					@endforeach 
					<td>
				   </td>
			   </tr>
			   
			   
		   </tbody>
	   </table>
	   <label class="label">Total</label>
	   <input class="input" value="{{$pur->total}}"><br><br>  
	   <td><a class="button is-success button is-fullwidth" href="{{route('purchase.index')}}">Lista</a></td>
			   </div>
			   </div>
   @endsection