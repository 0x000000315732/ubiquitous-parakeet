<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project1/tasks', [TasksController::class, 'index'])->name('project1.tasks.index');
Route::post('/project1/tasks', [TasksController::class, 'store'])->name('project1.tasks.store');
Route::get('/project1/tasks/create', [TasksController::class, 'create'])->name('project1.tasks.create');
Route::get('/project1/tasks/{id}', [TasksController::class, 'show'])->name('project1.tasks.show');
Route::get('/project1/tasks/{id}/edit', [TasksController::class, 'edit'])->name('project1.tasks.edit');
Route::patch('/project1/tasks/{id}', [TasksController::class, 'update'])->name('project1.tasks.update');
Route::delete('/project1/tasks/{id}', [TasksController::class, 'destroy'])->name('project1.tasks.destroy');

