<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
    <h1>Acá se mostrarán las consultas</h1>  
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Fecha de Contrato</th>
                <th>Fecha de Terminación</th>
                <th>Placa</th>
                <th>Rol ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->usuario_id }}</td>
                <td>{{ $usuario->nombre_usuario }}</td>
                <td>{{ $usuario->contrasena }}</td> <!-- Ten cuidado al mostrar contraseñas -->
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->cedula }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->fecha_contrato }}</td>
                <td>{{ $usuario->fecha_terminacion }}</td>
                <td>{{ $usuario->placa }}</td>
                <td>{{ $usuario->rol_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>  
</body>
</html>




