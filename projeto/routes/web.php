<?php

use Illuminate\Support\Facades\Route;


Route::get("/","PrincipalController@principal");

Route::get("/sobre-nos", "SobreNosController@principal");

Route::get("/contato", "ContatoController@principal");

//Ao colocar {} depois de uma barra, estamos informando que ser trata de um parametro
//O laravel buscara a função mais similar ao que foi requisitado na URL
//Posso passar varios parametros, porem sempre separados por /, devendo sempre ter uma atenção aos parametros

Route::prefix('/app')->group(function(){ 
    Route::get('/login', function(){echo('teste');});
    Route::get('/clientes', function(){echo('teste');});
    Route::get('/fornecedores', function(){echo('teste');});
    Route::get('/produtos', function(){echo('teste');});
});