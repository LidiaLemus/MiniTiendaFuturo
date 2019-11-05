@extends('home')
@section('content')
<div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('customer.create')}}">Agregar Cliente</a>
 		</div>
         </div>

        <h1 class="title is-3">Lista de Clientes</h1>
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>Nombre Completo</th>
 			<th>Correo Electronico</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Nit</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($customer as $customer)
 				<tr>
		<td>{{$customer->fullname}}</td>
		<td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->nit}}</td>
		<td><a class="button is-primary" href="{{route('customer.show',$customer->id)}}">Detalle Cliente</a>
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
    
