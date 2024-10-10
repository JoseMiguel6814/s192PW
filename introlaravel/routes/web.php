<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/',[controladorVistas::class, 'home'])->name('inicio');
Route::get('/form',[controladorVistas::class, 'formulario'])->name('formulario');
Route::get('/clientes',[controladorVistas::class, 'consulta'])->name('clientes');

Route::view('/comp', 'componentes')->name('componentes');



































//ruta tipo view
/* Route::view('/','inicio' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');
 */

