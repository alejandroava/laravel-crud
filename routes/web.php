<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/producto',[ProductController::class,'index'])->name('product.index');
Route::delete('/producto/{id}',[ProductController::class,'destroy'])->name('producto.destroy');
Route::get('producto/{id}',[ProductController::class,'show'])->name('producto.show');

