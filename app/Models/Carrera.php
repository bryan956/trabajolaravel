<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];

    public function estudiantes() {
        return $this->belongsToMany(Estudiante::class);
    }
}
