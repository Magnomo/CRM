<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    //
    protected $fillable =['rua','complemento','cep','numero'];
    protected $table = 'endereco';
    protected $timestamps=false;


    public function usuario(){
        $this->belongsTo('app\Usuario');
    }
    
}
