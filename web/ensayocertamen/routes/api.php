<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NegociosController;
use App\Http\Controllers\ProductosController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("negocios/get",[NegociosController::class, "getNegocio"]);
Route::post("negocios/post",[NegociosController::class, "crearNegocios"]);
Route::post("negocios/delete",[NegociosController::class, "eliminarNegocio"]);

Route::post("productos/post",[ProductosController::class, "crearProducto"]);
Route::get("productos/get",[ProductosController::class, "getProducto"]);