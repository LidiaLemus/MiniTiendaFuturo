@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('provider.create')}}">Agregar Proveedor</a>
 		</div>
         </div>

        <h1 class="title is-3">Proveedor</h1>
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>Nombre del Proveedor</th>
 			<th>Telefono</th>
            <th>Correo</th>
            <th>Nombre de la compañia</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($provider as $provider)
 				<tr>
		<td>{{$provider->fullname}}</td>
		<td>{{$provider->phone}}</td>
        <td>{{$provider->email}}</td>
        <td>{{$provider->company->name}}</td>
      
		
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
        </div>
        </div>
   @endsection
