<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    //
    protected $fillable = ['nome','dt_nasc','cpf', 'rg', 'sexo'];
    protected $timestamps = false;
    protected $table = 'cliente';

    public function endereco(){
        return $this->hasMany('app\Endereco');
    }
    public function contato(){
        return $this->hasMany('app\Contato');
    }
}
