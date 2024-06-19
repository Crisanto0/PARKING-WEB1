<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario',
        'contrasena',
    ];

    protected $hidden = [
        'contrasena',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }
}

