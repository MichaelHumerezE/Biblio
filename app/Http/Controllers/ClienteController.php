<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Support\Facades\Http;

date_default_timezone_set('America/La_Paz');

class ClienteController extends Controller
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
            'userType' => 'Lector'
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $clientes = $response->json();
            return view('administrador.gestionar_clientes.index', compact('clientes', 'email'));
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
        return view('administrador.gestionar_clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        return redirect()->route('clientes.index')->with('mensaje', 'cliente Agregado Con Éxito');
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
        return view('administrador.gestionar_clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        return redirect()->route('clientes.index')->with('mensaje', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('clientes.index')->with('message', 'Se han borrado los datos correctamente.');
    }
}
