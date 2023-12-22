<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return "<h1>hola mundo</h1>";
});

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{nombre?}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::get('productos/{id}/edit', [ProductoController::class, 'edit']);
Route::put('productos/{id}', [ProductoController::class, 'update']);
Route::delete('productos/{id}', [ProductoController::class, 'destroy']);




Route::resource('usuario', UsuarioController::class);
