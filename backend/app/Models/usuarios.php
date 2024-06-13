<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public static function obtenerTodos()
    {
        return self::all();
    }
}
