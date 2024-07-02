<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\SidemenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Http\Request;

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/category', function () {return view('category');})->name('category');

Route::get('/menu/{category_id}', [MenuController::class, 'index'])->name('menu.index');

Route::get('/option', [OptionController::class, 'index'])->name('option.index');

Route::get('/sidemenu', [SidemenuController::class, 'index'])->name('sidemenu.index');

Route::post('/sidemenu', [SidemenuController::class, 'store'])->name('sidemenu.store');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::post('/payment', [OrderController::class, 'processPayment'])->name('processPayment');

Route::get('/receipt', [ReceiptController::class, 'index'])->name('receipt.index');

Route::get('/receipt/{order_id}', [ReceiptController::class, 'show'])->name('receipt.show');
