<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\buscarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [buscarController::class,'inicio'] );
Route::put('/home', [ProductoController::class, 'update']);

Route::resource('/buscar',buscarController::class);

Route::resource('/home',ProductoController::class)->middleware('auth');

Route::resource('/agregarcategoria',CategoriasController::class);
Route::resource('/agregarusuario',UsuariosController::class);

//Route::view('/home','home')->middleware('auth');



Route::get('/auth', function () {
    return view('Auth');
})->name('login')->middleware('guest'); // poner cuando esté el home    y poner @auth en vistas para mostrar el boton home 

Route::post('/auth',[AuthController::class,'autenticar']);

Route::post('/logout',[AuthController::class,'logout']);


Route::view('/carrito', 'carrito')->name('cart.list');
Route::post('/carrito', [CarController::class, 'comprar']);
//Route::get('cart', [CarController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CarController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CarController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CarController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CarController::class, 'clearAllCart'])->name('cart.clear');
    
