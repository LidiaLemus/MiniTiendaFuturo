@extends('home')
@section('content')

<body>
	<div class="container">

		<div class="card-content">
			<h1 class="title is-3">Detalle compañia</h1>


		</div>
		<table class="table is-fullwidth is-striped is-hoverable">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Nit</td>
					<td>Direccion</td>
					<td>Email</td>
					<td>Telefono</td>
				</tr>

			</thead>

			<tbody>
				<tr>
					<td>{{$company->name}}</td>
					<td>{{$company->nit}}</td>
					<td>{{$company->address}}</td>
					<td>{{$company->email}}</td>
					<td>{{$company->phone}}</td>
					<td><a class="button is-success button is-fullwidth" href="{{route('company.index')}}">Lista</a>
					</td>
					<td><a class="button is-primary button is-fullwidth"
							href="{{route('company.edit',$company->id)}}">Editar</a></td>
					<td>
						<form method="post" action="{{route('company.destroy',$company->id)}}">
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
</body>

</html>
@endsection