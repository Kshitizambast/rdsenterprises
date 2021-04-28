<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminOrderController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('/book/{id}', [PageController::class, 'viewAndCheckout']);

Route::post('/checkout', [PageController::class, 'checkout'])->name('checkout');

Route::get('/class/{id}', [PageController::class, 'booksBasedOnClass']);

Route::prefix('admin')->group(function() {
	Route::get('home', [AdminController::class, 'index']);
	Route::get('students', [AdminController::class, 'students']);
	Route::get('orders', [AdminController::class, 'orders']);
	Route::get('books', [AdminController::class, 'books']);
	Route::get('payments', [AdminController::class, 'payments']);
	Route::get('orders/edit/{id}', [AdminOrderController::class, 'edit']);
	Route::post('orders/update/{id}', [AdminOrderController::class, 'update']);
	Route::post('orders/delete', [AdminOrderController::class, 'delete']);
	Route::get('books/create', [AdminBookController::class, 'addBook']);
	Route::post('books/upload', [AdminBookController::class, 'uploadBook']);
	Route::get('books/edit/{id}', [AdminBookController::class, 'editBook']);
	Route::post('books/update/{id}', [AdminBookController::class, 'updateBook']);
	Route::post('books/delete', [AdminBookController::class, 'deleteBook']);
});