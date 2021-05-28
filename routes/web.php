<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/articulos', [App\Http\Controllers\MensajeController::class, 'index'])->name('articulos.index');
Route::get('/articulos/create', [App\Http\Controllers\MensajeController::class, 'create'])->name('articulos.create');
Route::post('/articulos/store', [App\Http\Controllers\MensajeController::class, 'store'])->name('articulos.store');
Route::get('/articulos/{articulo}', [App\Http\Controllers\MensajeController::class, 'show'])->name('articulos.show');
Route::get('/articulos/{articulo}/edit', [App\Http\Controllers\MensajeController::class, 'edit'])->name('articulos.edit');
Route::put('/articulos/{articulo}', [App\Http\Controllers\MensajeController::class, 'update'])->name('articulos.update');
Route::delete('/articulos/{articulo}', [App\Http\Controllers\MensajeController::class, 'destroy'])->name('articulos.destroy');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
