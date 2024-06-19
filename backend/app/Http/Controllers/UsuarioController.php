<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrarUsuarios()
    {
        $usuarios = DB::table('usuarios')->get(); // Asegúrate de que 'usuarios' sea el nombre correcto de tu tabla.
        return view('consultas', compact('usuarios'));
    }
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_usuario' => 'required|max:255',
            'contrasena' => 'required',
            'email' => 'required|email',
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_contrato' =>'required',
            'fecha_terminacion' => 'required',
            
            'rol_id' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        // Insertar los datos en la tabla usuarios
        DB::table('usuarios')->insert([
            'nombre_usuario' => $validatedData['nombre_usuario'],
            'contrasena' => bcrypt($validatedData['contrasena']), // Encriptar la contraseña
            'email' => $validatedData['email'],
            'nombre' => $validatedData['nombre'],
            'apellido' => $validatedData['apellido'],
            'cedula' => $validatedData['cedula'],
            'direccion' => $validatedData['direccion'],
            'telefono' => $validatedData['telefono'],
            'fecha_contrato' => $validatedData['fecha_contrato'],
            'fecha_terminacion' => $validatedData['fecha_terminacion'],
            'rol_id' => $validatedData['rol_id'],

           
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Redirigir o enviar una respuesta según sea necesario
        return redirect('/consultas')->with('success', 'Usuario creado con éxito.');
    }
}



