<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('v1')->group(function () {
    Route::prefix('public')->group(function () {
        Route::prefix('characters')->group(function () {
            Route::get('/', 'App\Http\Controllers\CharacterController@get_all');
            Route::get('/{id}', 'App\Http\Controllers\CharacterController@get');
            Route::get('/{id}/comics', 'App\Http\Controllers\CharacterController@getcomics');
            Route::get('/{id}/events', 'App\Http\Controllers\CharacterController@getevents');
            Route::get('/{id}/series', 'App\Http\Controllers\CharacterController@getseries');
            Route::get('/{id}/stories', 'App\Http\Controllers\CharacterController@getstories');
        });
    });
});

