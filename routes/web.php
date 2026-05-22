<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


// Home
Route::get('/', function () {
    return redirect('/dashboard');
});


// Dashboard
Route::get('/dashboard', [TaskController::class, 'dashboard']);


// ======================
// TASK ROUTES
// ======================

// Show all tasks
Route::get('/tasks', [TaskController::class, 'index']);

// Create task form
Route::get('/create-task', [TaskController::class, 'create']);

// Store task
Route::post('/create-task', [TaskController::class, 'store']);

// Toggle checklist
Route::post('/tasks/{id}/toggle', [TaskController::class, 'toggle']);

// Delete task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

// Completed tasks page
Route::get('/tasks/completed', [TaskController::class, 'completed']);