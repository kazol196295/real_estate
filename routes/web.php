<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/home');
Auth::routes();


// Pages
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
// Route::get('/product-details/{id}', [App\Http\Controllers\HomeController::class, 'productdetails'])->name('product.details');
Route::get('/product_details/{ID}/', [App\Http\Controllers\ProductController::class, 'productdetails'])->name('productdetails');


Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('role');
Route::get('admin/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::post('admin/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('admin/product/edit/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('admin/product/update', [ProductController::class, 'UpdateProduct'])->name('product.update');
Route::get('admin/product/delete/{id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
