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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/livros/{id}/update', 'HomeController@update')->name('updatLivro');
Route::get('/livros/update/enviar', 'livrosController@atualizarLivro')->name('enviarupdateLivro');
Route::get('/livros/{id}/del', 'livrosController@excluirLivro')->name('deletarLivro');
Route::get('/livros/{id}/alugar', 'HomeController@alugar')->name('alugarLivro');
Route::get('/livros/cadastrar/enviar', 'livrosController@novoLivro')->name('cadastroEnviar');
Route::get('/livros/user/{id}/mudar', 'usereditController@mudarUser')->name('userMudar');
Route::get('/livros/user/listar', 'usereditController@listarUser')->name('userLista');

