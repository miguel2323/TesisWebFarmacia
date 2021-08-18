<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller as ControllersController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Url;
use PhpParser\Node\Name;
use App\Models\Categoria;
use App\Models\Producto;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('Producto',ApiController::class);

