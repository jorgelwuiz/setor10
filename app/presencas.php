<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presencas extends Model
{
    protected $fillable = ['id', 'presenca_id', 'evento_id'];
}
