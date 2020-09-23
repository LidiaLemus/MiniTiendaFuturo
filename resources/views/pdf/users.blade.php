<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #users {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #users td,
        #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #users tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #users tr:hover {
            background-color: #ddd;
        }

        #users th {
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

        <h1>Reportes de los Usuarios</h1>
    </div>
    <div class="date">Fecha del reporte:{{ $date }}</div>
    <table id="users">
        <thead>
            <tr>

                <th>Nombre Completo</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo Electronico</th>

            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
        </tbody>
        @endforeach
    </table>
</body>

</html>