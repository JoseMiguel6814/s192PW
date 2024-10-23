<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
   public function home(){
    return view('inicio');
   }

   public function formulario(){
    return view('formulario');
   }

   public function consulta(){
    return view('clientes');
   }

   public function procesar_cliente(Request $peticion){
      //return $peticion->all();
      //return 'la informacion del cliente llego al controlador';
      //return $peticion->path();
      //return $peticion->url();
      //return $peticion->ip();
   



      //!procesar vistas
      //return redirect()->route('clientes');

      //!redireccion al origen
      //return back();


      //!redireccion con valores en session
      $usuario= $peticion->input(('txtnombre'));
      session()->flash('exito','se guardo el usuario'.$usuario);
      return to_route('formulario');











   }


}
