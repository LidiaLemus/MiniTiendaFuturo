@extends('home')
@section('content')
<div class="container">

	<div class="card-content">
		<div class="field is-small is-rounded">
			<div class="control">
				<a class="button is-link is-pulled-right " href="{{route('stocktaking.create')}}">Agregar Inventario</a>
			</div>
		</div>

		<h1 class="title is-3">Inventario</h1>
		<table class="table is-fullwidth is-striped is-hoverable ">
			<thead>
				<tr>

					<th>No</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
				@foreach($stocktaking as $stocktaking )
				<tr>
					<td>{{$stocktaking->id}}</td>
					<td>{{$stocktaking->product->name}}</td>
					<td>{{$stocktaking->description}}</td>
					<td>{{$stocktaking ->quantity}}</td>
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