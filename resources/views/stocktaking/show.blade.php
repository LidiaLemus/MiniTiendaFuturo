@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Inventario</h1>
        
 		
 	</div>
        <table class="table is-fullwidth is-striped is-hoverable">
 		<thead>
 			<tr>
             <td>No</td>
 			<td>Nombre</td>
            <td>Descripcion</td>
            <td>Cantidad</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
             <td>{{$stocktaking->id}}</td>
		<td>{{$stocktaking->product->name}}</td>
		<td>{{$stocktaking->description}}</td>
        <td>{{$stocktaking ->quantity}}</td>
                
	 			<td><a class="button is-success button is-fullwidth" href="{{route('stocktaking.index')}}">Lista</a></td>
				 <td><a class="button is-primary button is-fullwidth" href="{{route('stocktaking.edit',$stocktaking->id)}}">Editar</a></td>
	 		
	 		<td>
	 		</td>
 		    </tr>

 
 		</tbody>
 	</table>
        </div>
        </div>
    @endsection