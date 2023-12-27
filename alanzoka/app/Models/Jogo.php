<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogo extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome_jogo',
        'tipo_jogo',
        'categ_jogo',
        'dur_i',
        'dur_f',
        'data_i',
        'data_f',
        'obs_jogo',
        'status_jogo'
    ];

}
