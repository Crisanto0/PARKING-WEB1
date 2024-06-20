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
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

use App\Http\Controllers\ZonasController;
Route::get('/ConsultasZonas', [ZonasController::class, 'mostrarZonas']);
Route::post('/ConsultasZonas', [ZonasController::class, 'store']);
Route::get('/zonas_parqueo/{id}/editar', [ZonasController::class, 'edit'])->name('zonas_parqueo.edit');
Route::put('/zonas_parqueo/{id}', [ZonasController::class, 'update'])->name('zonas_parqueo.update');
Route::delete('/zonas_parqueo/{id}', [ZonasController::class, 'destroy'])->name('zonas_parqueo.destroy');
