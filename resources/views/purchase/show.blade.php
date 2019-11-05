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
			 <td>Fecha</td>
			 <td>Total</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
			 <td>{{$purchase->id}}</td>
             <td>{{$purchase->date}}</td>
		<td>{{$purchase->total}}</td>
                
	 			<td><a class="button is-success button is-fullwidth" href="{{route('purchase.index')}}">Lista</a></td>
	 			
	 		<td>
	 			


	 		</td>
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
   @endsection