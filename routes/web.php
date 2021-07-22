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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '/'], static function (): void {
    Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');
    Route::group(['prefix' => '/schedule'], static function (): void {
        Route::get('/', 'App\Http\Controllers\ScheduleController@index')->name('schedule');
        Route::get('/post', 'App\Http\Controllers\ScheduleController@from')->name('post');
        Route::post('/post', 'App\Http\Controllers\ScheduleController@post')->name('post');
    });
});
