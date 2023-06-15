<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instituicao', function () {
    return view('instituicao');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/perguntas-frequentes', function () {
    return view('perguntas frequentes');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});