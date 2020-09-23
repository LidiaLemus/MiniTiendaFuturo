<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #products {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #products td,
        #products th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #products tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #products tr:hover {
            background-color: #ddd;
        }

        #products th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: black;
            color: white;
        }

        .titulo {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="titulo">

        <h1>Reporte de Productos</h1>
    </div>
    <div class="date">Fecha del reporte:{{ $date }}</div>
    <table id="products">
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