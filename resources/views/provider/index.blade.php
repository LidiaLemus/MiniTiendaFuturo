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
		@include('provider.search')
		<table class="table is-fullwidth is-striped is-hoverable ">
			<thead>
				<tr>

					<th>Nombre del Proveedor</th>
					<th>Telefono</th>
					<th>Correo</th>

				</tr>
			</thead>
			<tbody>
				@foreach($pro as $provider)
				@if($provider->is_active===1)
				<tr>
					<td>{{$provider->fullname}}</td>
					<td>{{$provider->phone}}</td>
					<td>{{$provider->email}}</td>
					<td><a class="button is-primary" href="{{route('provider.show',$provider->id)}}">Detalle</a>
					</td>

				</tr>
			</tbody>
			@endif
			@endforeach
		</table>
		{!! $pro->render() !!}
	</div>
</div>
@endsection