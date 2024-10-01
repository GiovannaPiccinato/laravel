<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreController;
use App\Models\Book;

use function Symfony\Component\String\b;

Route::get('/', function(){
    return redirect('/book');
});

// Route::get('/sobre',[SobreController::class, 'sobre']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);

Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors', [AuthorController::class, 'store']);

Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store']);
// irá criar uma tabela para que nao precisemos ficar mexendo SQL

Route::get('book/{book}/edit', [BookController::class, 'edit']);


Route::get('author/{author}/edit', [AuthorController::class, 'edit']);
Route::put('author/{author}', [AuthorController::class, 'update']);

Route::put('book/{book}', [BookController::class, 'update']);
Route::get('/book/{book}', [BookController::class, 'show']);

Route::delete('/book/{book}', [BookController::class, 'delete']);

Route::get('/tag', [TagController::class, 'index']);
Route::get('/tag/create', [TagController::class, 'create']);
Route::post('/tag', [TagController::class, 'store']);
