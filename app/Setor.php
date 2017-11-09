<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setores';


    public function equipamento()
    {
        return $this->hasMany('App\Equipamento', 'setor_id');
    }

}
