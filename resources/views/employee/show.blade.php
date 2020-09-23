@extends('home')
@section('content')
<div class="container">

	<div class="card-content">
		<h1 class="title is-3">Detalle Empleado</h1>


	</div>
	<table class="table is-fullwidth is-striped is-hoverable">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>Direccion</td>
				<td>Telefono</td>
				<td>Correo Electronico</td>
				<td>Numero de CUI</td>
			</tr>

		</thead>

		<tbody>
			<tr>
				<td>{{$employee->fullname}}</td>
				<td>{{$employee->address}}</td>
				<td>{{$employee->phone}}</td>
				<td>{{$employee->email}}</td>
				<td>{{$employee->cui}}</td>
				<td><a class="button is-success button is-fullwidth" href="{{route('employee.index')}}">Lista</a></td>
				<td><a class="button is-primary button is-fullwidth"
						href="{{route('employee.edit',$employee->id)}}">Editar</a></td>
				<td>
					<form method="post" action="{{route('employee.destroy',$employee->id)}}">
						@csrf
						@method('DELETE')
						<button class="button is-danger">Borrar</button>
					</form>


				</td>
			</tr>


		</tbody>
	</table>
</div>
</div>
@endsection