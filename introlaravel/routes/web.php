<?php

use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
});
 */

 //ruta de tipo view 
Route::view('/','welcome');
Route::view('/form','formulario');