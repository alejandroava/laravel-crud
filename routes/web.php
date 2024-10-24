<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/producto',[ProductController::class,'index'])->name('producto.index');

Route::get('/producto', function () {
    return view('product.product');
});

