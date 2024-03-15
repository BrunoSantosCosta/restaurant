<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Rout eServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::post('/mail', [App\Http\Controllers\HomeController::class, 'mail'])->name('mail');
Route::get('/carts/{user}', [App\Http\Controllers\CartController::class, 'getCart'])->name('getcart');
Route::post('/cart/update/{user}', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart/delete/{cart}/{user}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');
Route::get('/cart/{product}/{user}', [App\Http\Controllers\CartController::class, 'addCart'])->name('cart.add');
Route::get('/order/{user}', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
Route::post('/order/{user}', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery/{type}', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blog'])->name('allblogs');
Route::get('/blog/{blog}', [App\Http\Controllers\HomeController::class, 'getBlog'])->name('get.blog');
Route::get('/category/blog/{id}', [App\Http\Controllers\HomeController::class, 'getCategoryBlogs'])->name('category.blog');
Route::resource('/service', App\Http\Controllers\ServiceController::class, ['index' => 'service']);

