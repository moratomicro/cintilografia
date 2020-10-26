<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    protected $fillable = [
        'pacienteNome',        
        'procedimento',
        'dtExame',
        'horario',
        'mes',
        'ano',
    ];
}
