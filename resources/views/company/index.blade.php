@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">

        <div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('company.create')}}">Agregar Compañia</a>
 		</div>
         </div>

		<h1 class="title is-3">Lista de Compañias</h1>
		@include('company.search')
		 <div class="mytable">
			 <table class="table pricing_table  is_fullwidth">
				 <thead>
					 <tr>
						 
						 <th>Nombre</th>
						 <th>Nit</th>
						 <th>Direccion</th>
						 <th>correo</th>
						 <th>Telefono</th>
						</tr>
					</thead>
					<tbody>
						@foreach($compa as $company)
						<tr>
							<td>{{$company->name}}</td>
							<td>{{$company->nit}}</td>
							<td>{{$company->address}}</td>
							<td>{{$company->email}}</td> 
							<td>{{$company->phone}}</td>
							<td><a class="button is-primary" href="{{route('company.show',$company->id)}}">Detalle Compania</a>
							</td>
						</tr>
					</tbody>
					@endforeach  
				</table>
			</div>
	 {!! $compa->render() !!}
        </div>
        </div>
   @endsection
