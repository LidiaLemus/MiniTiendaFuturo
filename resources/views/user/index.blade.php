@extends('home')
@section('content')
<div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
		
 		</div>
         </div>

		<h1 class="title is-3">Lista de Usuarios</h1>
		<div class="content">
			<div class="level">
				<div class="level-right">@include('user.search')</div>
				<div class="level-left"><a class="button is-info is-rounded" href="{{route('user.pdf')}}">Descargar PDF</a></div>
			</div>
		
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
			 @if($user->is_active===1)
 				<tr>
		<td>{{$user->name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>
		<td><a class="button is-primary" href="{{route('user.show',$user->id)}}">Detalle Usuario</a></td>
		 </tbody>
		 @endif
		@endforeach  
	 </table>

	 <div class="columns">
		<div class="column">
			
		</div>
		<div class="column"></div>
		<div class="column"></div>
	 </div>

	 {!! $users->render() !!}
        </div>
        </div>
            </div>

        </div>
@endsection
    
