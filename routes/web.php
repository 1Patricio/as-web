<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('produto', [ProdutoController::class, 'index']);
Route::get('produto/create', [ProdutoController::class, 'create']);
Route::post('produto', [ProdutoController::class, 'store']);
Route::get('produto/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produto/{id}', [ProdutoController::class, 'update']);
Route::delete('produto/{id}', [ProdutoController::class, 'destroy']);

Route::get('categoria', [CategoriaController::class, 'index']);
Route::get('categoria/create', [CategoriaController::class, 'create']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('/categoria{id}/edit', [CategoriaController::class, 'edit']);
Route::put('/categoria{id}', [CategoriaController::class, 'update']);
Route::delete('/categoria{id}', [CategoriaController::class, 'destroy']);
