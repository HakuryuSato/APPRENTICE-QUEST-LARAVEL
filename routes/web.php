<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']);
Route::resource('todos', TodoController::class);

Route::get('/', function () {
    return redirect('/todos');
});



