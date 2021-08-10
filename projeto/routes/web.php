<?php

use Illuminate\Support\Facades\Route;


Route::get("/","PrincipalController@principal");

Route::get("/sobre-nos", "SobreNosController@principal");

Route::get("/contato", "ContatoController@principal");

//Ao colocar {} depois de uma barra, estamos informando que ser trata de um parametro
//O laravel buscara a função mais similar ao que foi requisitado na URL
//Posso passar varios parametros, porem sempre separados por /, devendo sempre ter uma atenção aos parametros

//Ao colocar ? ao lado direito do parametro e atribuir um default à $ ele fica opcional,
Route::get(
    '/contato/{nome}/{categoria_id}',
    function(
        string $nome,
        int $categoria_id
    ){
    echo("
        Nome: $nome <br>
        Categoria: $categoria_id<br>
    ");
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
//Ultilizando o where para condicionar os parametros da rota