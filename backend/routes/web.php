<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\DB;

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión establecida exitosamente a la base de datos " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "No se pudo conectar a la base de datos. Por favor, verifica tu configuración. Error:" . $e;
    }
});
use App\Http\Controllers\UsuarioController;
Route::get('/consultas', [UsuarioController::class, 'mostrarUsuarios']);
Route::post('/consultas', [UsuarioController::class, 'store']);


