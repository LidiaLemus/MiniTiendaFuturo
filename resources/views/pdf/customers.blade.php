<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
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

        <h1>Reporte de los Clientes</h1>
    </div>
    <div class="date">Fecha del reporte:{{ $date }}</div>
    <table id="customers">
        <thead>
            <tr>

                <th>Nombre Completo</th>
                <th>Correo Electronico</th>
                <th>Direccion</th>
                <th>Telefono</th>

                <th>Nit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)


            <tr>
                <td>{{$customer->fullname}}</td>

                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->nit}}</td>
            </tr>
        </tbody>

        @endforeach
    </table>
</body>

</html>