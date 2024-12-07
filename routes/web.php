<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Homepage route
//Route::get('/', [TaskController::class, 'index']); // This should point to the TaskController

// Task routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
