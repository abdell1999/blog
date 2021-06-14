<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;

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


//Pagina de inicio
Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('ruta.index');

//Rutas relacionadas con los articulos
Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::post('/articulos/store', [ArticuloController::class, 'store'])->name('articulos.store');
Route::get('/articulos/{articulo}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::get('/articulos/{articulo}/edit', [ArticuloController::class, 'edit'])->name('articulos.edit');
Route::put('/articulos/{articulo}', [ArticuloController::class, 'update'])->name('articulos.update');
Route::delete('/articulos/{articulo}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');

//PARTE ADMIN



//Rutas relacionadas con las categorias
Route::get('/admin/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/admin/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/admin/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/admin/categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/admin/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/admin/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/admin/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
