<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpRequest;
use App\Http\Requests\UpdateEmpRequest;
use Illuminate\Support\Facades\Http;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->post('https://biblioapidb.azurewebsites.net/api/User/GetUserByTipo', [
            'userType' => 'Personal'
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $empleados = $response->json();
            return view('administrador.gestionar_empleados.index', compact('empleados', 'email'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.gestionar_empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpRequest $request)
    {
        return redirect()->route('empleados.index')->with('mensaje', 'Empleado Agregado Con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('administrador.gestionar_empleados.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpRequest $request, $id)
    {
        return redirect()->route('empleados.index')->with('mensaje', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('empleados.index')->with('message', 'Se han borrado los datos correctamente.');
    }
}
