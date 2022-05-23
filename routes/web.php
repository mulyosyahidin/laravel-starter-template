<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShopController;

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

Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/product', [ShopController::class, 'product'])->name('product');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');
Route::get('/admin/form', [AdminController::class, 'form'])->name('admin.form');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/update/{book}', [BookController::class, 'update'])->name('books.update');