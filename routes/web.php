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

Route::get('/livros/{id}/update', 'HomeController@update')->name('home');
Route::get('/livros/{id}/del', 'HomeController@del')->name('home');
Route::get('/livros/{id}/alugar', 'HomeController@alugar')->name('home');
Route::get('/livros/cadastrar', 'HomeController@create')->name('home');

