<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cadastro_pessoas extends Model
{
    protected $fillable = [
                
        'id', 
        'area_id', 
        'congregacao_id', 
        'funcao_eclesiastica_id', 
        'nome', 
        'contato', 
        'email', 
        'numero_cartao_membro' ,
        'endereco',
        'numero',
        'status',
        'observacoes'
    ];
}
