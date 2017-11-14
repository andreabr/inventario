<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';
    protected $fillable = ["tipo", "marca", "modelo", "serial", "local", "usuario", "nome_de_rede", "licenciado", "lacre_numero", "setor_id"];

    public function setor()
    {
            return $this->belongsTo('App\Setor', 'setor_id');
    }







}
