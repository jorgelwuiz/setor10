<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastro_gerais extends Model
{
    protected $fillable = ['id', 'area_id', 'congregacao_id', 'nome', 'funcao_eclesiastica_id', 'eventos_id', 'numero_cartao_membro']; 
}


