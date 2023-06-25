<?php



use Illuminate\Support\Facades\Route;

Route::prefix('guzzlehttp')->group(function() {
    Route::get('/', 'GuzzleHttpController@index')->name('guzzlehttp');
});
