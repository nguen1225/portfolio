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

Route::group(['prefix' => '/login'], static function (): void {
    Route::get('/', 'App\Http\Controllers\LoginController@login');
    Route::post('/', 'App\Http\Controllers\LoginController@logincheck')->name('login');
});


Route::group(['prefix' => '/', 'middleware' => 'loggedInCheck'], static function (): void {

    Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');

    // スケジュール帳
    Route::group(['prefix' => '/schedule'], static function (): void {
        Route::get('/', 'App\Http\Controllers\ScheduleController@index')->name('schedule');
        Route::group(['prefix' => '/post'], static function (): void {
            Route::get('/', 'App\Http\Controllers\ScheduleController@from')->name('from');
            Route::post('/', 'App\Http\Controllers\ScheduleController@post')->name('post');
            Route::get('/show/{id}', 'App\Http\Controllers\ScheduleController@show')->name('show');
            Route::get('/{id}/edit', 'App\Http\Controllers\ScheduleController@edit')->name('edit');
            Route::patch('/{id}/edit', 'App\Http\Controllers\ScheduleController@update')->name('update');
            Route::delete('/{id}/edit', 'App\Http\Controllers\ScheduleController@delete')->name('delete');
        });
    });

    // 身体関係
    Route::group(['prefix' => '/vital'], static function (): void {
        Route::get('/', 'App\Http\Controllers\VitalController@index')->name('vital');
        Route::group(['prefix' => '/post'], static function (): void {
            Route::get('/', 'App\Http\Controllers\VitalController@from')->name('from');
            Route::post('/', 'App\Http\Controllers\VitalController@post')->name('post');
            Route::get('/show/{id}', 'App\Http\Controllers\VitalController@show')->name('show');
            Route::get('/{id}/edit', 'App\Http\Controllers\VitalController@edit')->name('edit');
            Route::patch('/{id}/edit', 'App\Http\Controllers\VitalController@update')->name('update');
            Route::delete('/{id}/edit', 'App\Http\Controllers\VitalController@delete')->name('delete');
        });
    });
});

