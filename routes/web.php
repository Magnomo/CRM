<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',['uses'=>'Controller@homepage']);
Route::get('/cadastrar','Controller@cadastrar');
#rotas de autenticação 
Route::get('/login','Controller@login');


/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato/{id?}',function($id=null){
    return "contato id= $id";
});
Route::post('/contato/{id?}',function(){
    dd($_POST);
});