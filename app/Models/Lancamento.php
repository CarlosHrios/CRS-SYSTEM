<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'convenio',
        'servico',
        'dia_hora',
        'telefone',
        'valor',
        'mes',
    ];
}
