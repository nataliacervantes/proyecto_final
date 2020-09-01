<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clases';

    public static $Horario = [
        '1' => '7 a 9',
        '2' => '9 a 11',
        '3' => '11 a 1',
        '4' => '1 a 3',
        '5' => '3 a 5',
        '6' => '5 a 7'
    ];
}
