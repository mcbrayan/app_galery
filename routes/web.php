<?php

use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\ImagenController;
use App\Models\Etiqueta;
use App\Models\Imagen;
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
    return view('welcome');
});

Route::get('etiqueta', [EtiquetaController::class, 'index'])->name('etiqueta.index');
Route::get('imagen', [ImagenController::class, 'index']);
Route::delete('etiqueta/{id}', [EtiquetaController::class, 'destroy'])->name('etiqueta.destroy');
Route::get('etiqueta/{id}', [EtiquetaController::class, 'edit'])->name('etiqueta.edit');
