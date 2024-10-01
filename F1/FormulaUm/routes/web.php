<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\RaceController;



Route::get('/', [TeamController::class, 'index']);
Route::get('/team/create', [TeamController::class, 'create']);
Route::post('/team/store', [TeamController::class, 'store']);
Route::get('/team/{team}/edit', [TeamController::class, 'edit']);
Route::put('/team/{team}', [TeamController::class, 'update']);
Route::get('/team/{team}', [TeamController::class, 'show']);
Route::delete('team/{team}', [TeamController::class, 'delete']);

Route::get('/pilot', [PilotController::class, 'index']);
Route::get('/pilot/create', [PilotController::class, 'create']);
Route::post('/pilot/store', [PilotController::class, 'store']);
Route::get('/pilot/{pilot}/edit', [PilotController::class, 'edit']);
Route::put('/pilot/{pilot}', [PilotController::class, 'update']);
Route::get('/pilot/{pilot}', [PilotController::class, 'show']);
Route::delete('pilot/{pilot}', [PilotController::class, 'delete']);

Route::get('/race', [RaceController::class, 'index']);
Route::get('/race/create', [RaceController::class, 'create']);
Route::post('/race/store', [RaceController::class, 'store']);
Route::get('/race/{race}/edit', [RaceController::class, 'edit']);
Route::put('/race/{race}', [RaceController::class, 'update']);
Route::get('/race/{race}', [RaceController::class, 'show']);
Route::delete('race/{race}', [RaceController::class, 'delete']);
