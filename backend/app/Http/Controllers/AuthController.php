<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string',
            'contrasena' => 'required|string',
        ]);

        $user = User::where('nombre_usuario', $request->nombre_usuario)->first();

        if (!$user || !Hash::check($request->contrasena, $user->contrasena)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Aquí puedes generar un token de sesión o JWT si prefieres
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
        ]);
    }
}


