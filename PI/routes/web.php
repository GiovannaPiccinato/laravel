<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

Route::get('/produto', [ProdutoController::class, 'index']);
Route::get('/produto/{produto}', [ProdutoController::class, 'show']);

Route::get('/categoria', [ProdutoController::class, 'index']);
Route::get('/categoria/{categoria}', [ProdutoController::class, 'show']);
