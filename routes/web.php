<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskStatusesController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

// Public routes
Route::get('task_statuses', [TaskStatusesController::class, 'index'])->name('task_statuses.index');
Route::get('labels', [LabelController::class, 'index'])->name('labels.index');
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::middleware(['auth'])->get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Task Statuses
    Route::get('task_statuses/create', [TaskStatusesController::class, 'create'])->name('task_statuses.create');
    Route::post('task_statuses', [TaskStatusesController::class, 'store'])->name('task_statuses.store');
    Route::get('task_statuses/{task_status}/edit', [TaskStatusesController::class, 'edit'])->name('task_statuses.edit');
    Route::match(['put', 'patch'], 'task_statuses/{task_status}', [TaskStatusesController::class, 'update'])->name('task_statuses.update');
    Route::delete('task_statuses/{task_status}', [TaskStatusesController::class, 'destroy'])->name('task_statuses.destroy');

    // Labels
    Route::get('labels/create', [LabelController::class, 'create'])->name('labels.create');
    Route::post('labels', [LabelController::class, 'store'])->name('labels.store');
    Route::get('labels/{label}/edit', [LabelController::class, 'edit'])->name('labels.edit');
    Route::match(['put', 'patch'], 'labels/{label}', [LabelController::class, 'update'])->name('labels.update');
    Route::delete('labels/{label}', [LabelController::class, 'destroy'])->name('labels.destroy');

    // Tasks
    Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::match(['put', 'patch'], 'tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

require __DIR__ . '/auth.php';
