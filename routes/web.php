<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\SidemenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Http\Request;

Route::get('/', function () {
  return view('index');
});

Route::get('/category', function () {
  return view('category');
});

Route::get('/menu', function () {
  return view('menu');
});

Route::get('/menu', [MenuController::class,'index']);

Route::get('/menu/{category_id}', [MenuController::class, 'index'])->name('menu.index');

Route::get('/option', function () {
  return view('option');
});

Route::get('/option', [OptionController::class, 'index'])->name('option.index');


Route::get('/sidemenu', function () {
  return view('sidemenu');
});

Route::get('/sidemenu', [SidemenuController::class, 'index'])->name('sidemenu.index');
Route::post('/sidemenu', [SidemenuController::class, 'store'])->name('sidemenu.store');

// Route::get('/payment', function () {
//   return view('payment');
// });

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
// Route::post('/payment', [PaymentController::class, 'show'])->name('payment.show');

Route::post('/payment', [OrderController::class, 'processPayment'])->name('processPayment');

// Route::get('/payment', function () {
//   return view('payment');
// })->name('successPage');

Route::get('/receipt', [ReceiptController::class, 'index'])->name('receipt.index');

Route::get('/receipt/{order_id}', [ReceiptController::class, 'show'])->name('receipt.show');

// Route::get('/receipt', [ReceiptController::class, 'show'])->name('receipt');
