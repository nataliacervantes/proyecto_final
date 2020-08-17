<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';

    public static $Semestre = [
        'Primero' => 'Primero',
        'Segundo' => 'Segundo',
        'Tercero' => 'Tercero',
        'Cuarto' => 'Cuarto',
        'Quinto' => 'Quinto',
        'Sexto' => 'Sexto',
        'Séptimo' => 'Séptimo',
        'Octavo' => 'Octavo'
    ];

    public function profesores()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor','codigo');
    }

    public function carreras()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera','id');
    }

    protected $primaryKey = 'CRN';
}
