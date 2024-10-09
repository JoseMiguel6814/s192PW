<?php

use Illuminate\Support\Facades\Route;

//Shift alt a
//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */


//ruta tipo view
Route::view('/','inicio' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');