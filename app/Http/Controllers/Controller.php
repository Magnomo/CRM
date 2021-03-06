<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function homepage(){
    $titulo= "Titulo da pagina";
    return view('welcome', ['title'=>$titulo]);
}
public function cadastrar(){
    echo "pagina de cadastro";
}
public function login(){
    return view('user.login');
    echo "pagina de login";
}
}
