@extends('home')
@section('content')
<div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			
 		</div>
         </div>

		<h1 class="title is-3">Lista de Usuarios</h1>
		@include('user.search')
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>Nombre Completo</th>
             <th>Direccion</th>
             <th>Telefono</th>
 			<th>Correo Electronico</th>
        
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($users as $user)
 				<tr>
		<td>{{$user->name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>
    
		<td><a class="button is-primary" href="{{route('user.show',$user->id)}}">Detalle Usuario</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
	 </table>
	 {!! $users->render() !!}
        </div>
        </div>
            </div>

        </div>
@endsection
    
