<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    /*Variável para criar/atualizar os campos via Eloquent */
    protected $fillable = [
        'name',
        'cpf',
        'contact'
    ];

    /*Variavel que o usuario não pode ter o conhecimento.
    Oculta o compo do model nos retornos 
    protected $hidden = [
        'password',
    ];
    */
}
