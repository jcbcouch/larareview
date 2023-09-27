<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodoController::class, 'index']);

Route::get('/todos/{todo}', [TodoController::class, 'show']);

Route::get('/todos/create', [TodoController::class, 'create']);

Route::post('/todos', [TodoController::class, 'store']);

Route::get('/todos/edit/{todo}', [TodoController::class, 'edit']);

Route::post('/todos/{todo}', [TodoController::class, 'update']);