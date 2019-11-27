@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Venta</h1>
        
 		
	 </div>
	 <div class="columns">
		 <div class="column">

			 <label class="label">Nombre de Empleado</label>
			 <input type="text" class="input" value="{{$salese->empleado}}">
		 </div>
		 <div class="column">
			 <label class="label">Nombre de Cliente</label>
			 <input type="text" class="input" value="{{$salese->cliente}}">
		 </div>
	 </div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
				 <td>Precio</td>
				 <td>Cantidad</td>
				 <td>Producto</td>
				<td>Subtotal</td>	 
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
			 @foreach($detallese as $d)
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
<input class="input" value="{{$salese->total}}"><br><br>  
<td><a class="button is-success button is-fullwidth" href="{{route('sale.index')}}">Lista</a></td>
        </div>
        </div>
    @endsection