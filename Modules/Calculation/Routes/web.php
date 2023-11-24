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
use Modules\Calculation\Http\Controllers\CalculationController;

Route::group(['prefix' => 'calculation'], function () {
    Route::get('/', [CalculationController::class, 'index'])->name('calculation.index');
});
