
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table  class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                
                <th>Codigo del Producto</th>
                <th>Nombre del Producto</th>
                <th>Cantidad del Producto</th>
                <th>Precio de Venta</th>
                <th>Precio de Compra</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
           
                    <tr>
           <td>{{$product->code}}</td>
           <td>{{$product->name}}</td>
           <td>{{$product->stock}}</td>
           <td>{{$product->sale_price}}</td>
           <td>{{$product->purchase_price}}</td>
           <td>{{$product->stock}}</td>
           
       </tr>
            </tbody>
       
           @endforeach
       
        </table>
       
    </body>
    </html>