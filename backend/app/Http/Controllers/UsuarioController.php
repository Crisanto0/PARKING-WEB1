<?php
namespace App\Http\Controllers;




class UsuarioController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = Usuarios::all();

        // Pasar los usuarios a la vista
        return view('consultas', ['usuarios' => $usuarios]);
    }
}