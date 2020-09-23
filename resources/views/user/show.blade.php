@extends('home')
@section('content')
<div class="container">

	<div class="card-content">
		<h1 class="title is-3">Detalle Usuario</h1>


	</div>
	<table class="table is-fullwidth is-striped is-hoverable">
		<thead>
			<tr>
				<td>Nombre completo</td>
				<td>Direccion</td>
				<td>Telefono</td>
				<td>Correo Electronico</td>

			</tr>

		</thead>

		<tbody>
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->address}}</td>
				<td>{{$user->phone}}</td>
				<td>{{$user->email}}</td>

				<td><a class="button is-success button is-fullwidth" href="{{route('user.index')}}">Lista</a></td>
				<td><a class="button is-primary button is-fullwidth" href="{{route('user.edit',$user->id)}}">Editar</a>
				</td>
				<td>
					<form action="{{action('UserController@destroy',$user->id)}}" method="post">
						{{csrf_field()}}
						<input type="hidden" value="DELETE" name="_method">
						<button class="button is-danger">Eliminar</button>
					</form>
				</td>
			</tr>


		</tbody>
	</table>
</div>
</div>

@endsection