<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
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