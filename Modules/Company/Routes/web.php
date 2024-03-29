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

Route::group(['prefix' => 'company', 'middleware' => 'auth'], function () {
    Route::get('/', 'CompanyController@index')->name('company.index');
    Route::get('/create', 'CompanyController@create')->name('company.create');
    Route::post('/store', 'CompanyController@store')->name('company.store');
});
