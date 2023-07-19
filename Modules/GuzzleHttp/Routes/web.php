<?php



use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'guzzlehttp', 'middleware' => 'auth'], function () {
    Route::get('/', 'GuzzleHttpController@index')->name('guzzlehttp');
});
