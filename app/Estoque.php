<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    //
    protected $fillable = ['nome_produto','valor_custo','valor_venda','quantidade'];
    protected $table = 'estoque';
    protected $timestamps=false;

    public function produto(){
        return $this->hasMany('app\Produto');
    }
}
