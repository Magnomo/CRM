<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;

class ItemVenda extends Model
{
    //
    protected $table = 'item_venda';
    protected $timestamps= false;
    protected $fillable = ['quantidade'];
    

    public function produto(){
        return $this->hasOne('app\Produto');
    }
    public function venda(){
        return $this->hasOne('app\Venda');
    }
}
