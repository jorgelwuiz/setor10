<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\cadastro_pessoas;

class congregacoes extends Model
{   
    protected $fillable = ['id', 'congregacao'];
    
    //relacionamento congregação
    public function cadastro_pessoas()
    {
        return $this->belongsTo(cadastro_pessoas::class, 'congregacao');
    }
}


