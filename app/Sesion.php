<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = 'sesion';

    public function profesores()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor','codigo');
    }

    public function carreras()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera','id');
    }
}
