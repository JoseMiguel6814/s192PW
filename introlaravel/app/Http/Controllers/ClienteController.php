<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaclientes = DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('numbertelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $usuario=$request->input('txtnombre');
        session()->flash('exito','se guardo el usuario'.$usuario);
        return to_route('formulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorClientes $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
    // Actualizar la información del cliente
    $cliente->update([
        'nombre' => $request->txtnombre,
        'apellido' => $request->txtapellido,
        'correo' => $request->txtcorreo,
        'telefono' => $request->numbertelefono,
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->back()->with('exito', 'Cliente actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          // Buscar el cliente por su ID
          $cliente = Cliente::findOrFail($id);

          // Eliminar el cliente
          $cliente->delete();
           // Redirigir con mensaje de éxito
    return redirect()->back()->with('exito', 'Cliente actualizado con éxito');

    }
}
