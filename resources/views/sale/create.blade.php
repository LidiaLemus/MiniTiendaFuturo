@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Registro venta</h1>
          <div class="columns">
          <div class="column is-three-quarters">
          
          <form method="post" action="{{route('sale.store')}}">
    {{csrf_field() }}


    <div class="select is-multiple">
  <h2>Empleado</h2>
 <select name="employee_id" multiple size="2">
 @foreach($employee as $employee)
   <option value=" {{$employee['id'] }}"> {{$employee['fullname']}}</option>
   @endforeach 
 </select>
 </div>
 <div class="select is-multiple">
 <h2>Cliente</h2>
 <select name="customer_id" multiple size="2">
  @foreach($customer as $customer)
    <option value= "{{$customer['id'] }}"> {{$customer['fullname']}}</option>
    @endforeach
 </select>
 </div>
 <div class="select is-multiple">
 <h2>Prducto</h2>
 <select name="product_id" multiple size="2">
  @foreach($product as $product)
    <option value= "{{$product['id'] }}"> {{$product['name']}}</option>
    @endforeach
 </select>
 </div>
<br>
<br>
   
  <br>
  <br>



  <table class="table">
    
    <thead>
      <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Precio de Venta</th>
        <th>Cantidad</th>
        <th>Sub-Total</th>
      </tr>
    </thead>
    
    <tbody>
    
      <tr>
        <td>1</td>
        <td>Cafe Tacuba</td>
        <td>20</td>
        <td><input class="input" type="text" id="" placeholder="cantidad"></td>
        <td>100</td>
    
      </tr>
    
    </tbody>
    
    </table>
    <div class="columns">
      <div class="column is-three-fifth">
        <label>Total</label>
      </div>
      <div class="column">100</div>
    </div>
    <div class="level">
    <div class="level-left">
    
      <a href="{{route('sale.index')}}" class="button is-warning">Retroceder</a>
    </div>
    <div class="level-right">
      <button class="button is-success is-focused">Vender</button>
      <a class="button is-danger" href="{{route('sale.index')}}">Cancelar</a></td>
    
    </div>
    </div>
    </form>


    <div>
    
   
    </div>

    <div class="field">
  <div class="control">
    <input class="input is-primary " type="hidden" name="total" required>
  </div>
</div>
          </div>
          <div class="column"></div>
          </div>
          </div>
         
       <script>
       
       
       
       </script>

   

@endsection