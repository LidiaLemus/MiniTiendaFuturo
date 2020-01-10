@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Detalle Del Proveedor</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
 				<td>Nombre del proveedor</td>
 				<td>Numero de Telefono</td>
                 <td>Correo Electronico</td>
                 <td>Nombre de la compañia</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
             <td>{{$provider->fullname}}</td>
		<td>{{$provider->phone}}</td>
        <td>{{$provider->email}}</td>
        <td>{{$provider->company->name}}</td>
                
	 			<td><a class="button is-success button is-fullwidth" href="{{route('provider.index')}}">Lista</a></td>
				 <td><a class="button is-primary button is-fullwidth" href="{{route('provider.edit',$provider->id)}}">Editar</a></td>
				 <td><form action="{{action('ProviderController@destroy',$provider->id)}}" method="post">
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
