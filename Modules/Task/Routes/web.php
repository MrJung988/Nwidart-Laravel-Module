<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Task\Http\Controllers\TaskController;

Route::group(['prefix' => 'task', 'as' => 'admin.task.'], function () {
    Route::get('/', [TaskController::class, 'index'])->name('index');
    Route::get('create', [TaskController::class, 'create'])->name('create');
    Route::post('/', [TaskController::class, 'store'])->name('store');
    Route::post('edit', [TaskController::class, 'edit'])->name('edit');
    Route::delete('delete', [TaskController::class, 'destroy'])->name('destroy');
    Route::post('complete/{id}', [TaskController::class, 'complete'])->name('task.complete');
});
