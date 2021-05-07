<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'edad',
        'ubicacion',
        'email',
        'contraseña'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
