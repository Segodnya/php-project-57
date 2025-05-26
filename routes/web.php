<?php

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

// Task Statuses
Route::resource('task_statuses', TaskStatusesController::class);

// Labels
Route::resource('labels', LabelController::class);

// Tasks
Route::resource('tasks', TaskController::class);

require __DIR__ . '/auth.php';
