<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ThemeController;


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
Route::get('/terms', [PageController::class, 'terms']);
Route::get('/privacy', [PageController::class, 'privacy']);
Route::get('/refund', [PageController::class, 'refund']);

Route::get('/book/{id}', [PageController::class, 'viewAndCheckout']);

Route::post('/checkout', [PageController::class, 'checkout'])->name('checkout');

Route::get('/class/{id}', [PageController::class, 'booksBasedOnClass']);

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::get('register', [RegisterController::class, 'registerForm'])->name('register');
Route::post('login/request', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('register/request', [RegisterController::class, 'register'])->name('register_user');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('pdf-generate', [PDFController::class, 'index']);
Route::get('pay-bill/{id}', [PaymentController::class, 'index']);
Route::post('payment-status', [PaymentController::class, 'processPayment']);
//Route::post('payment-success', [PaymentController::class, 'processPayment']);



Route::middleware('auth')->group(function(){
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
		Route::get('profile', [AdminController::class, 'adminProfile']);
		Route::post('profile/update', [AdminController::class, 'updateProfile'])->name('update_profile');
		Route::post('profile/update-user', [AdminController::class, 'updateUser'])->name('update_user_profile');
		Route::get('file', [ThemeController::class, 'create']); 
		Route::post('file', [ThemeController::class, 'store'])->name('file');
	});
});
