<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//controlador vistas
Route::get('/',[controladorVistas::class, 'home'])->name('inicio');

Route::get('/clientes',[controladorVistas::class, 'consulta'])->name('clientes');
Route::post('/enviarclientes',[controladorVistas::class, 'procesar_cliente'])->name('rutaEnviar');
Route::view('/comp', 'componentes')->name('componentes');




//controlador cliente
Route::get('/cliente/create',[ClienteController::class, 'create'])->name('formulario');

Route::post('/cliente',[ClienteController::class, 'store'])->name('enviar');


































//ruta tipo view
/* Route::view('/','inicio' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');
 */

