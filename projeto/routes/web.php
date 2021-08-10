<?php

use Illuminate\Support\Facades\Route;


Route::get("/","PrincipalController@principal");

Route::get("/sobre-nos", "SobreNosController@principal");

Route::get("/contato", "ContatoController@principal");
