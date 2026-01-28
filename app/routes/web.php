<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project1/tasks', [TasksController::class, 'index']);
Route::post('/project1/tasks', [TasksController::class, 'store']);
Route::get('/project1/tasks/create', [TasksController::class, 'create']);
Route::get('/project1/tasks/{id}', [TasksController::class, 'show']);
Route::get('/project1/tasks/{id}/edit', [TasksController::class, 'edit']);
Route::patch('/project1/tasks/{id}', [TasksController::class, 'update']);
Route::delete('/project1/tasks/{id}', [TasksController::class, 'destroy']);
