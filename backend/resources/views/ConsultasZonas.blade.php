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

          body {
            font-family: Arial, sans-serif;
         }

          .search-form {
              margin: 20px 0;
          }

          .search-form input[type="text"] {
              padding: 10px;
              margin-right: 10px;
              width: 200px;
          }

          .search-form input[type="submit"] {
              padding: 10px 20px;
          }

          .search-results {
              margin-top: 20px;
          }

    </style>
</head>
<body>
  <div class="search-form">
          <form action="/ConsultasZonas" method="GET">
              <input type="text" name="id" placeholder="ID">
              <input type="text" name="descripcion" placeholder="Descripcion">
              <input type="submit" value="Buscar">
          </form>
  </div>
     
  
    <div> 
  <h2>FORMULARIO REGISTRAR NUEVAS ZONAS PARQUEO</h2> 
    <form action="/ConsultasZonas" method="POST">
      @csrf 
      <label for="descripcion">Descripción</label>
      <input type="text" id="descripcion" name="descripcion" requiered>
      <label for="parqueadero_id">Parqueadero_id</label>
      <input type="int" id="parqueadero_id" name="parqueadero_id">
      <input type="submit" value="Enviar">
    </form>
    <div class="search-results">
        <h1>Resultados de la Búsqueda</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Parqueadero_id</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($zonas_parqueo as $zonas_parqueo)
                <tr>
                    <td>{{ $zonas_parqueo->zona_parqueo_id }}</td>
                    <td>{{ $zonas_parqueo->descripcion }}</td>
                    <td>{{ $zonas_parqueo->parqueadero_id }}</td> 
                    <td><a href="{{ route('zonas_parqueo.edit', ['id' => $zonas_parqueo->zona_parqueo_id]) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('zonas_parqueo.destroy', ['id' => $zonas_parqueo->zona_parqueo_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
             </tbody>
        </table>  
    </div>
</body>
</html>