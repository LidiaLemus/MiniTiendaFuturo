@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3 animated infinite bounce delay-2s">Editar Venta</h1>
    <form method="post" action="{{route('sale.update',$sale->id)}}">
      @csrf
      @method('PATCH')
      {{csrf_field() }}

      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="total" placeholder="total" value="{{$sale->total}}">
        </div>
      </div>

      <select name="employee_id" multiple size="3">
        @foreach($employee as $employee)

        <option value=" {{$employee['id'] }}" @if($company->id === $sale->employee_id )
          selected
          @endif
          >{{$employee['fullname']}}</option>
        @endforeach
      </select>
      <select name="customer_id" multiple size="3">
        @foreach($customer as $customer)

        <option value=" {{$customer['id'] }}" @if($company->id === $sale->customer_id )
          selected
          @endif
          >{{$customer['fullname']}}</option>
        @endforeach
      </select>
  </div>

  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>

  </form>
</div>
</div>
@endsection