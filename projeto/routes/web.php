<?php

use Illuminate\Support\Facades\Route;


Route::get("/","PrincipalController@index")->name('site.index');

// Route::get("/sobre-nos", "SobreNosController@principal")->name('site.sobrenos');

// Route::get("/contato", "ContatoController@principal")->name('site.contato');
// Route::post("/contato", "ContatoController@salvar")->name('site.contato');
// Route::get('/login', function(){echo('teste');})->name('site.login');

// Route::prefix('/app')->group(function(){ 
//     Route::get('/clientes', function(){echo('teste');})->name('app.clientes');
//     Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
//     Route::get('/produtos', function(){echo('teste');})->name('app.produtos');
// });

// Route::get('/rota1', function(){
//     echo('rota1');
// })->name('site.rota1');

// // Route::redirect('/rota2', 'rota1');

// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

//Rota fallback, pag 404 not found
Route::fallback(function(){
    echo "A rota acessada não existe, <a href='/'>clique</a> aqui para ir para pagina inicial";
});