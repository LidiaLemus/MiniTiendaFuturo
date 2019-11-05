@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('employee.create')}}">Agregar Empleado</a>
 		</div>
         </div>

        <h1 class="title is-3">Lista de Empeados</h1>
        <table class="table is-fullwidth is-striped is-hoverable ">
 		<thead>
 			<tr>
 			
 			<th>Nombre Completo</th>
             <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>Numero de CUI</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($employee as $employee)
 				<tr>
		<td>{{$employee->fullname}}</td>
		<td>{{$employee->address}}</td>
        <td>{{$employee->phone}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->cui}}</td>
		<td><a class="button is-primary" href="{{route('employee.show',$employee->id)}}">Detalle</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
        </div>
        </div>
   @endsection