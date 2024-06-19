<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre_usuario' => 'required',
            'contrasena' => 'required',
        ]);

        $credentials = $request->only('nombre_usuario', 'contrasena');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            $nombre_usuario = Auth::nombre_usuario();
             $token = $nombre_usuario->createToken('MyApp')->accessToken;

            return response()->json([
                'message' => 'Login successful',
                'token' => $token, // Si estás usando tokens
                'nombre_usuario' => $nombre_usuario,
            ], 200);
        } else {
            // Autenticación fallida
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

}
