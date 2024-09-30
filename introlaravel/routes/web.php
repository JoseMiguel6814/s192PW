<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
});
 */

 //ruta de tipo view 
Route::view('/', 'Inicio')->name('Inicio');

Route::get('/form', [FormularioController::class, 'index'])->name('formulario');

Route::get('/clien', [ClientesController::class, 'index'])->name('clientes');