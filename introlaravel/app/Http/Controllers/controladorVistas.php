<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
   public function home(){
    return view('inicio');
   }

  
   public function consulta(){
    return view('clientes');
   }

   public function procesar_cliente(validadorClientes $peticionvalidada){
      
     
 
      
      
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
      $usuario= $peticionvalidada->input(('txtnombre'));
      session()->flash('exito','se guardo el usuario'.$usuario);
      return to_route('formulario');











   }


}
