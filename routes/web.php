<?php

use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rotas para trabalhar com serviõs
Route::get('/servicos', [ServicoController::class, 'index'])->name('servico.index');