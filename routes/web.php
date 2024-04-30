<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::prefix('/tasks')->middleware('auth')->group(function() {
    Route::get('/', [TaskController::class, 'index']);
    Route::get('/create', [TaskController::class, 'create']);
    Route::post('/', [TaskController::class, 'store']);

    Route::get('/{task}/edit', [TaskController::class, 'edit']);
    Route::put('/{task}', [TaskController::class, 'update']);

    Route::get('/{task}/delete', [TaskController::class, 'destroy']);
    Route::get('/{task}/swap', [TaskController::class, 'swap']);
});
