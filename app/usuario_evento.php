<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_evento extends Model
{
    protected $fillable = ['id', 'id_usuario', 'id_evento'];
}
