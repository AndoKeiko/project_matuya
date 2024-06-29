<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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

// Route::get('/menu/{category_id}', function (string $category_id) {
//   return 'category_id '.$category_id;
// });
// Route::get('/menu/{category_id}', function (Request $request, string $category_id) {
//   return 'category_id '.$category_id;
// });
Route::get('/menu/{category_id}', [MenuController::class, 'index'])->name('menu.index');
