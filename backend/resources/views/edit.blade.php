<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: left; 
            margin-right: 10px;
        } 
    </style>
</head>
<body>
    <h1>Editar Usuario</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario->usuario_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" value="{{ $usuario->contrasena }}" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="{{ $usuario->apellido }}" required>
        <br>
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula" name="cedula" value="{{ $usuario->cedula }}" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $usuario->direccion }}" required>
        <br>
        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono" value="{{ $usuario->telefono }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>
        <br>
        <label for="fecha_contrato">Fecha de contrato:</label>
        <input type="date" id="fecha_contrato" name="fecha_contrato" value="{{ $usuario->fecha_contrato }}" required>

        <label for="fecha_terminacion">Fecha de Terminación:</label>
        <input type="date" id="fecha_terminacion" name="fecha_terminacion" value="{{ $usuario->fecha_terminacion }}" required>
        <br>
        
        <label for="rol_id">Rol id:</label>
        <input type="number" id="rol_id" name="rol_id" value="{{ $usuario->rol_id }}" required>
        <br>
        <button type="submit">Actualizar Usuario</button>
    </form>
</body>
</html>

