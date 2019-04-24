<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    //
    protected $table = 'produto';
    protected $fillable=['nome','preco'];
    protected $timestamps=false;

    public function itemVenda(){
        return $this->belongsTo('app\itemVenda');
    }
    public function estoque(){
        return $this->belongsTo('app\estoque');
    }
    public function tipo(){
        return $this->hasOne('app\Tipo');
    }
}
