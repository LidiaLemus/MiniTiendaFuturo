@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Cliente</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
 				<td>Nombre</td>
 				<td>Correo Electronico</td>
                 <td>Direccion</td>
                 <td>Telefono</td>
                 <td>Nit</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
	 			<td>{{$customer->fullname}}</td>
	 			<td>{{$customer->email}}</td>
                 <td>{{$customer->address}}</td>
                 <td>{{$customer->phone}}</td>
                 <td>{{$customer->nit}}</td>
	 			<td><a class="button is-success button is-fullwidth" href="{{route('customer.index')}}">Lista</a></td>
	 			<td><a class="button is-primary button is-fullwidth" href="{{route('customer.edit',$customer->id)}}">Editar</a></td>
			 <td><form action="{{action('CustomerController@destroy',$customer->id)}}" method="post">
				{{csrf_field()}}
				<input type="hidden" value="DELETE" name="_method">
				<button class="button is-danger">Eliminar</button>



			</form></td>
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
    
@endsection