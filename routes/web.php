<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions.index');
Route::get('/auctions/create', [AuctionController::class, 'create'])->name('auctions.create');
Route::post('/auctions', [AuctionController::class, 'store'])->name('auctions.store');

Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/buy-now', [BuyNowController::class, 'index'])->name('buy_now.index');
Route::post('/buy-now', [BuyNowController::class, 'store'])->name('buy_now.store');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/{control}', [AdminController::class, 'update'])->name('admin.update');
