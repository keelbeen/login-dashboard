<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlidebarController;
use App\Http\Controllers\HomeController;

Route::resource('pegawai', 'App\Http\Controllers\PegawaiController'::class);
Route::get('admin.products', 'App\Http\Controllers\ProductController@index')->name('admin.products');
Route::get('admin.payment', 'App\Http\Controllers\ProductController@index')->name('admin.payment');
Route::get('create4', 'App\Http\Controllers\SlidebarController@create4')->name('create4');
Route::get('admin.slidebars', 'App\Http\Controllers\SlidebarController@index')->name('admin.slidebars');
Route::get('add', 'App\Http\Controllers\ProductController@add')->name('create3');
Route::get('user.store', 'App\Http\Controllers\StoreController@index')->name('user.store');
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::post('proses_regis', 'App\Http\Controllers\RegisterController@proses_regis')->name('proses_regis');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('editor', UserController::class);
    });
});
Route::get('/create', [AdminController::class, 'create']);
Route::post('/store', [AdminController::class, 'store']);
Route::get('/show/{id}', [AdminController::class, 'show']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::get('/destroy/{id}', [AdminController::class, 'destroy']);

Route::get('/create3', [ProductController::class, 'add']);

Route::get('/user', function() {
    return view('user.editor');
})->middleware('auth');

Route::resource('/user/store', StoreController::class)
->middleware('auth');

Route::get('admin.products', [ProductController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('proses_regis', [RegisterController::class, 'proses_regis']);

Route::get('admin.product', 'App\Http\Controllers\ProductController@index')->name('admin.product');
Route::get('create2', [productController::class, 'add'])->name('create2');
Route::post('/add-product', [productController::class, 'create'])->name('products.create');
Route::get('/{product}', [productController::class, 'show2'])->name('products.show');
Route::put('/{product}', [productController::class, 'update'])->name('products.update');
Route::delete('/{product}', [productController::class, 'delete'])->name('products.delete');
Route::get('/', [productController::class, 'index'])->name('product.index');

Route::get('admin.slidebars', 'App\Http\Controllers\SlidebarController@index')->name('admin.slidebars');
Route::get('/create4', [SlidebarController::class, 'create'])->name('create4');
Route::post('/store1', [SlidebarController::class, 'store1']);
Route::get('/edit/{slidebar}', [SlidebarController::class, 'show1'])->name('edit');
Route::put('/update1/{slidebar}', [SlidebarController::class, 'update1'])->name('update1');
Route::delete('/delete1/{slidebar}', [SlidebarController::class, 'delete1'])->name('delete1');

Route::get('/', [HomeController::class, 'index']);
Route::get('home.detail', [HomeController::class, 'index2']);
Route::resource('pegawai', PegawaiController::class,);