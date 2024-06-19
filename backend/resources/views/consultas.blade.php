<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        table {
  width: 100%;
  border-collapse: collapse; /* Elimina el espacio entre las celdas */
}

th, td {
  border: 1px solid black; /* Líneas sólidas para las celdas */
  padding: 8px; /* Espaciado dentro de las celdas */
}

th {
  background-color: #f2f2f2; /* Color de fondo para los encabezados */
}

tr:nth-child(even) {
  background-color: #f9f9f9; /* Color de fondo para las filas pares */
}

label {
                display: inline-block;
                width: 100px;
                text-align: left; 
                margin-right: 10px;
                
                }  

    </style>
</head>
<body>
    <h1>Acá se mostrá las consultas de la tabla usuarios</h1>
    <div> 
        <h2>FORMULARIO REGISTRAR DATOS USUARIOS</h2> 
    <form action="/consultas" method="POST">
  @csrf <!-- Directiva de Blade para protección CSRF -->
  <label for="nombre_usuario">Nombre de Usuario:</label>
  <input type="text" id="nombre_usuario" name="nombre_usuario" required>

  <label for="contrasena">Contraseña:</label>
  <input type="password" id="contrasena" name="contrasena" required>
<br>
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required>

  <label for="apellido">Apellido:</label>
  <input type="text" id="apellido" name="apellido" required>
<br>
  <label for="cedula">Cedula:</label>
  <input type="text" id="cedula" name="cedula" required>

  <label for="direccion">Dirección:</label>
  <input type="text" id="direccion" name="direccion" required>
<br>
  <label for="telefono">Telefono:</label>
  <input type='number' id="telefono" name="telefono" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
<br>
  <label for="fecha_contrato">Fecha de contrato:</label>
  <input type="date" id="fecha_contrato" name="fecha_contrato" >

  <label for="fecha_terminacion">Fecha de Terminación:</label>
  <input type="date" id="fecha_terminacion" name="fecha_terminacion" >
<br>
  

  <label for="rol_id">Rol id:</label>
  <input type="number" id="rol_id" name="rol_id" >
<br>
  <input type="submit" value="Enviar">
</form>
</div>
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




