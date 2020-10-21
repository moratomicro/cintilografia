<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    
    protected $fillable = [
        'nome', 'datanasc', 'municipio'
    ];
    
    protected $dates = ['data'];

    protected $dataFormat = 'm-d-Y';
}
