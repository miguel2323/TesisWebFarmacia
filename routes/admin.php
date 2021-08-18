<?php



use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoContoller;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('',[AdminController::class,'index'])->middleware('can:admin.home')->name('admin.home');
  
Route::resource('user',UserController::class)->only(['index','edit','update'])->names('admin.usuarios');

Route::resource('categorias',CategoriaController::class)->except('show')->names('admin.categorias');

 Route::resource('productos', ProductoContoller::class)->except('show')->names('admin.productos');