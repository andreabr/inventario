<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $fillable = ['tipo', 'marca', 'modelo', 'serial', 'local', 'usuario', 'nome_de_rede', 'lacre_numero', 'created_at', 'updated_at'];
    protected $table = 'equipamentos';
}
