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

Route::get('/', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/', 'App\Http\Controllers\LoginController@logincheck')->name('login.check');

// Route::group(['prefix' => '/login'], static function (): void {
// });

Route::group(['prefix' => 'logout',], static function (): void {
    Route::get('/', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

Route::group(['prefix' => '/', 'middleware' => 'loggedInCheck'], static function (): void {

    Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');

    // スケジュール帳
    Route::group(['prefix' => '/schedule'], static function (): void {
        Route::get('/', 'App\Http\Controllers\ScheduleController@index')->name('schedule');
        Route::get('/search', 'App\Http\Controllers\ScheduleController@search')->name('schedule.search');
        Route::get('/schedule-date', 'App\Http\Controllers\ScheduleController@scheduleDate')->name('schedule.schedule-date');

        Route::group(['prefix' => '/post'], static function (): void {
            Route::get('/', 'App\Http\Controllers\ScheduleController@from')->name('schedule.from');
            Route::post('/', 'App\Http\Controllers\ScheduleController@post')->name('schedule.post');
            Route::get('/show/{id}', 'App\Http\Controllers\ScheduleController@show')->name('schedule.show');
            Route::get('/{id}/edit', 'App\Http\Controllers\ScheduleController@edit')->name('schedule.edit');
            Route::patch('/{id}/edit', 'App\Http\Controllers\ScheduleController@update')->name('schedule.update');
            Route::delete('/{id}/edit', 'App\Http\Controllers\ScheduleController@delete')->name('schedule.delete');
        });
    });

    // 身体関係
    Route::group(['prefix' => '/vital'], static function (): void {
        Route::get('/', 'App\Http\Controllers\VitalController@index')->name('vital');
        Route::get('/health', 'App\Http\Controllers\VitalController@health');

        Route::group(['prefix' => '/post'], static function (): void {
            Route::get('/', 'App\Http\Controllers\VitalController@from')->name('vital.from');
            Route::post('/', 'App\Http\Controllers\VitalController@post')->name('vital.post');
            Route::get('/show/{id}', 'App\Http\Controllers\VitalController@show')->name('vital.show');
            Route::get('/{id}/edit', 'App\Http\Controllers\VitalController@edit')->name('vital.edit');
            Route::patch('/{id}/edit', 'App\Http\Controllers\VitalController@update')->name('vital.update');
            Route::delete('/{id}/edit', 'App\Http\Controllers\VitalController@delete')->name('vital.delete');
        });
    });
});

