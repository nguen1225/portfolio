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

// ログイン関係
Route::get('/', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/', 'App\Http\Controllers\LoginController@loginCheck')->name('login.check');

// パスワード変更
Route::group(['prefix' => 'password'], static function ():void {
    Route::get('/send-email', 'App\Http\Controllers\PasswordController@sendEmailForm')->name('password.send-email');
    Route::post('/send-email', 'App\Http\Controllers\PasswordController@generateUrl')->name('password.generate-url');
    Route::get('/send-completely', 'App\Http\Controllers\PasswordController@sendCompletely')->name('password.send-completely');
    Route::get('/{id}/edit', 'App\Http\Controllers\PasswordController@edit')->name('password.edit');
    Route::post('/{id}/edit', 'App\Http\Controllers\PasswordController@update')->name('password.update');
    Route::get('/completed', 'App\Http\Controllers\PasswordController@completed')->name('password.completed');
});

Route::group(['prefix' => 'logout'], static function (): void {
    Route::get('/', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

// 新規登録
Route::group(['prefix' => 'sign_up'], static function (): void {
    Route::get('/', 'App\Http\Controllers\UserController@form')->name('sign_up.form');
    Route::post('/', 'App\Http\Controllers\UserController@signUp')->name('sign_up');
    Route::get('/completed', 'App\Http\Controllers\UserController@completed')->name('sign_up.completed');
});

Route::group(['prefix' => '/', 'middleware' => 'loggedInCheck'], static function (): void {

    Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');
    // Route::get('/home', 'App\Http\Controllers\DiaryGenreController@index')->name('genre');

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

    Route::group(['prefix' => '/genre'], static function (): void {
        Route::get('/', 'App\Http\Controllers\DiaryGenreController@form')->name('genre');
        Route::post('/', 'App\Http\Controllers\DiaryGenreController@post')->name('genre.post');
        Route::get('/{id}/edit', 'App\Http\Controllers\DiaryGenreController@edit')->name('genre.edit');
        Route::patch('/{id}/edit', 'App\Http\Controllers\DiaryGenreController@update')->name('genre.update');
    });
});

