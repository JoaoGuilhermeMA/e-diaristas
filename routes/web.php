<?php

use App\Http\Controllers\ServicoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('usuarios', UsuarioController::class);

// rotas para trabalhar com serviços
Route::get('/servicos', [ServicoController::class, 'index'])->name('servico.index');
Route::get('servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
