<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;
class Contato extends Model
{
    //atributtes
    protected $table = 'contato';
    protected $timestamp=false;
    protected $fillable = ['contato'];

    //methods
    public function cliente(){
        return $this->belongsTo('app\Cliente');
    }
}
