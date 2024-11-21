<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

/* Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit'); */
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

//controlador vistas
Route::get('/',[controladorVistas::class, 'home'])->name('inicio');


Route::post('/enviarclientes',[controladorVistas::class, 'procesar_cliente'])->name('rutaEnviar');
Route::view('/comp', 'componentes')->name('componentes');




//controlador cliente
Route::get('/cliente/create',[ClienteController::class, 'create'])->name('formulario');

Route::post('/cliente',[ClienteController::class, 'store'])->name('enviar');
Route::get('/clientes',[ClienteController::class, 'index'])->name('clientes');

































//ruta tipo view
/* Route::view('/','inicio' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');
 */

