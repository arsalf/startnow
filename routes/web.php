<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StartupsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/post/{slug}', [PostController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/home', HomeController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UsersController::class);
    Route::resource('startups', StartupsController::class);
    Route::get('startups/{id}/product/add', [ProductController::class, 'create'])->name("products.create");
    Route::get('startups/{startup_id}/product/{product_id}/edit', [ProductController::class, 'edit'])->name("products.edit");
    Route::put('startups/{startup_id}/product/{product_id}/edit', [ProductController::class, 'update'])->name("products.update");
    Route::post('startups/{id}/product/add', [ProductController::class, 'store'])->name("products.store");
    Route::post('startups/{id}/product/{p_id}/like', [ProductController::class, 'addlike'])->name("products.like");
    Route::post('startups/{id}/product/{p_id}/dislike', [ProductController::class, 'removelike'])->name("products.dislike");
    // Route::resource('products', ProductController::class);
    
    Route::post('kategori', [KategoriController::class, 'add'])->name("kategori.add");
    Route::get('kategori', [KategoriController::class, 'index'])->name("kategori");
    
});