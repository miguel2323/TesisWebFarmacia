<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'index'])->name('productos.index');
Route::get('productos/{producto}',[ProductController::class,'show'])->name('productos.show');
Route::get('categoria/{categoria}',[ProductController::class,'categoria'])->name('productos.categoria');



Route::get('productos/{producto}/edit',[ProductController::class,'edit'])->name('productos.edit');

Route::delete('productos/{producto}',[ProductController::class,'destroy'])->name('productos.destroy');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
