@section('aside')

      
    <aside>
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="{{route('home')}}" class="">
            <span class="icon"><i class="fa fa-home"></i></span>Inicio
          </a>
        </li>
        <li>
          
          <a href="#" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span> Area de Venta
          </a>

          <ul>

            <li>
              <a href="{{route('sale.create')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span> vender
              </a>
            </li>
            <li>
              <a href="{{route('sale.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span> Ventas
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Detalle Venta
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon is-small"><i class="fa fa-chart-bar"></i></span>Reporte Venta
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Area de Compra
          </a>
          <ul>
          <li>
              <a href="{{route('stocktaking.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Inventario
              </a>
            </li>
            <li>
              <a href="{{route('purchase.create')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>comprar
              </a>
            </li>
            <li>
              <a href="{{route('purchase.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>compras
              </a>
            </li>
            <li>
              <a href="{{route('purchase_Detail.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Detalle de compra
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Tipo de Persona
          </a>
          <ul>
          <li>
              <a href="{{route('customer.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Cliente
              </a>
            </li>
            <li>
              <a href="{{route('provider.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Proveedor
              </a>
            </li>
            <li>
            <li>
              <a href="{{route('employee.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Empleado
              </a>
            </li>
            <li>
              <a href="">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Usuario
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Area de producto
          </a>
          <ul>
          <li>
              <a href="{{route('product.create')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Registrar producto
              </a>
            </li>
            <li>
              <a href="{{route('product.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Lista de productos
              </a>
            </li>
            <li>
              <a href="{{route('company.index')}}">
                <span class="icon is-small"><i class="fa fa-link"></i></span>Compañia
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
    </aside>
    
  
  @endsection