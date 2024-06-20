<!DOCTYPE html>
<html>
<head>
    <title>Editar zonas</title>
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
    <h1>Editar zonas</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('zonas_parqueo.update', $zonas_parqueo->zona_parqueo_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="descripcion">Dscripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $zonas_parqueo->descripcion }}" required>

        <label for="parqueadero_id">Parqueadero_id:</label>
        <input type="text" id="parqueadero_id" name="parqueadero_id" value="{{ $zonas_parqueo->parqueadero_id }}" required>

        <button type="submit">Actualizar Zona</button>
    </form>
</body>
</html>