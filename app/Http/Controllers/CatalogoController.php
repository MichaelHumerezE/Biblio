<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatalogoController extends Controller
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
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            return view('cliente.catalogo.catalogo', compact('email', 'documentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
        return view('cliente.home', compact('email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->post('https://biblioapidb.azurewebsites.net/api/User/GetDatosDocById', [
                'IdDoc' => $id
            ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documento = $response->json();
            return view('cliente.catalogo.product', compact('email', 'documento'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
