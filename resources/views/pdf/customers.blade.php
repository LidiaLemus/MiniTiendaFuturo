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