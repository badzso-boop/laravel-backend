<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpritzerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/spritzers', [SpritzerController::class, 'index']);
Route::get('/spritzers/{id}', [SpritzerController::class, 'show']);
Route::post('/spritzers', [SpritzerController::class, 'store']);
Route::put('/spritzers/{id}', [SpritzerController::class, 'update']);
Route::delete('/spritzers/{id}', [SpritzerController::class, 'destroy']);

Route::view('/froccsok', 'spritzers', ['spritzers' => App\Models\Spritzer::all()]);
