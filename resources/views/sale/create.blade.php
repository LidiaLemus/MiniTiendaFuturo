@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3 animated infinite bounce delay-2s">Registro venta</h1>
    <div class="columns">
      <div class="column is-three-quarters">

        <form class="form" method="post" action="{{route('sale.store')}}">
          {{csrf_field() }}
          <div class="columns">
            <div class="column">

              <h2>Empleado</h2>
              <div class="select">
                <select name="employee_id">
                  @foreach($employee as $employee)
                  <option value=" {{$employee['id'] }}"> {{$employee['fullname']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="column">

              <h2>Cliente</h2>
              <div class="select">
                <select name="customer_id">
                  @foreach($customer as $customer)
                  <option value=" {{$customer['id'] }}"> {{$customer['fullname']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="column">
              <h2>Producto</h2>
              <div class="select">
                <select name="product" id="pro">
                  @foreach($product as $product)
                  <option value="{{$product->id}}_{{$product->stock}}_{{$product->sale_price}}"> {{$product->name}}
                  </option>
                  @endforeach
                </select>
              </div>

            </div>
          </div>
          <br><br>
          <div class="control">
            <label for="quantity">STOCK</label>
            <input class="input" type="number" name="stock" id="stock" readonly>
          </div>
          <div>
            <label for="cantidad">Cantidad</label>
            <input class="input" id="cantidad" name="cantidad" type="number">
          </div>
          <div>
            <label for="sale_price">Precio Venta</label>
            <input class="input" type="number" name="sale_price" id="sale_price" readonly><br><br>
          </div>
          <div class="field">
            <div class="control">
              <a id="add"><input class="button is-warning" type="button" value="Agregar" readonly></a>
            </div>
          </div>
          <br>
          <table class="table" id="detalle">
            <thead>
              <tr>
                <th></th>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio de Venta</th>
                <th>Sub-Total</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td>Total</td>
                <td></td>
                <td>
                  <h4 id="total">Q/. 0.00</h4>
                  <input type="hidden" name="suma_total" id="suma_total">
                </td>
              </tr>
            </tfoot>
          </table>
          <div>
            <input name="_token" value="{{csrf_token()}}" type="hidden">
            <button class="button is-primary">Guardar</button>
            <button class="button is-danger " name="cancelar">cancelar</button>
          </div>

        </form>
      </div>
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
  $(document).ready(function() {
          $('#add').click(function() {
            agregar();
          })
          mostrar();
        });

        var cont = 0;
        total = 0;
        subtotal = [];
        $('#guardar').hide();
        $('#pro').change(mostrar);
        
        function mostrar(){
          datos = document.getElementById('pro').value.split('_');
          $('#sale_price').val(datos[2]);
          $('#stock').val(datos[1]);
        }

        function agregar(){
          datos = document.getElementById('pro').value.split('_');
          idproduct = datos[0];
          pdt = $('#pro option:selected').text();
          cantidad = $('#cantidad').val();
          sale_price = $('#sale_price').val();
          quantity = $('#stock').val();

          if (idproduct != "" && cantidad != "" && cantidad > 0 &&  sale_price!="") {
            if(quantity>=cantidad){
              subtotal[cont] = (cantidad * sale_price);
              total = total + subtotal[cont];

              var fila = '<tr class="selected" id="fila' + cont + '">' +
                    '<td><button class="button is-danger" onclick="eliminar(' + cont + ');">X</button></td>' +
                    '<td><input type="hidden" name="id_producto[]" value="' + idproduct + '">' + pdt + '</td>' +
                    '<td><input class="input" type="number" name="cantidad[]" value="' + cantidad + '"readonly></td>' +
                    '<td><input class="input" type="number" name="precio_venta[]" value="' + sale_price + '" readonly></td>' +
                    '<td><input class="input" type="number" name="subtotal[]" value="' + subtotal[cont] + '" readonly</td></tr>';
                    cont++;

                    $('#total').html('Q/.' + total);
                    $('#suma_total').val(total);
                    limpiar();
                    $('#detalle').append(fila);
                    evaluar();
            }else{
              alert('cantidad maxima que puede vender' + quantity);
            }
            
          }else{
            alert('no se puede realizar la venta');
          }
        }
        function limpiar() {
          $('#cantidad').val('');
          $('#stock').val('');
          $('#sale_price').val('');
          
        }
        function evaluar (){
          if (total >0){
            $("guardar").show();
          }else{
            $("#guardar").hide();
          }
        }
      function eliminar(index){
        total = total - subtotal[index];
        $('#total').html("Q/." + total);
        $('#suma_total').val(total);
        $('#fila' + index).remove();
        evaluar();
      }
</script>



<script src="resource/jquery.js"></script>

@endsection