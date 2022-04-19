<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserrController;



Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::post('store', 'App\Http\Controllers\RegisterController@store')->name('store');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('editor', UserController::class);
    });
});

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/store ', [RegisterController::class, 'store']);

Route::get('/create', [AdminController::class, 'create']);
Route::post('/store', [AdminController::class, 'store']);
Route::get('/show/{id}', [AdminController::class, 'show']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::get('/destroy/{id}', [AdminController::class, 'destroy']);

Route::get('/user', function() {
    return view('user.editor');
})->middleware('auth');

Route::resource('/user/store', StoreController::class)
->middleware('auth');