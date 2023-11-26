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
use Modules\Multiform\Http\Controllers\MultiformController;

Route::group(['prefix' => 'multiform'], function () {
    Route::get('/', [MultiformController::class, 'index'])->name('multiform.index');
});
