@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Compras</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
 				<td>Nombre Empleado</td>
				 <td>Nombre Cliente</td>
                 <td>Total de la venta</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
	 		<td>{{$sale->employee->fullname}}</td>
			<td>{{$sale->customer->fullname}}</td>
			
			<td>{{$sale->total}}</td>
		
               
                
	 			<td><a class="button is-success button is-fullwidth" href="{{route('sale.index')}}">Lista</a></td>
	 		<td>
	 		</td>
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
    @endsection