<?php

use Illuminate\Support\Facades\Route;


Route::get("/","PrincipalController@principal")->name('site.index');

Route::get("/sobre-nos", "SobreNosController@principal")->name('site.sobrenos');

Route::get("/contato", "ContatoController@principal")->name('site.contato');

//Ao colocar {} depois de uma barra, estamos informando que ser trata de um parametro
//O laravel buscara a função mais similar ao que foi requisitado na URL
//Posso passar varios parametros, porem sempre separados por /, devendo sempre ter uma atenção aos parametros

Route::prefix('/app')->group(function(){ 
    Route::get('/login', function(){echo('teste');})->name('app.login');
    Route::get('/clientes', function(){echo('teste');})->name('app.clientes');
    Route::get('/fornecedores', function(){echo('teste');})->name('app.fornecedores');
    Route::get('/produtos', function(){echo('teste');})->name('app.produtos');
});