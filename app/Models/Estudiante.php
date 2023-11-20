<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiante';

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'cedula',
        'email',
        'telefono',
        'direccion',
        'carrera_id',
    ];

    public function carrera() {
        return $this->belongsTo(Carrera::class);
    }
}
