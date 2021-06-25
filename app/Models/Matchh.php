<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Matchh extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;

    protected $fillable = [
        'amigo_id',
        'aceptar',
        'user_id',
    ];
}
