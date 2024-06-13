<?php

namespace App\Http\Controllers;


use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = Usuario::all();

        // Pasar los usuarios a la vista
        return view('consultas', ['usuarios' => $usuarios]);
    }
}