<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email = session()->get('email');
        $tipo = session()->get('tipo');
        if ($tipo == 'Personal') {
            return view('administrador.home', compact('email'));
        }else{
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosDocs');
            if ($response->successful()) {
                // La solicitud fue exitosa, procesa la respuesta
                $documentos = $response->json();
                return view('cliente.home', compact('email', 'documentos'));
            } else {
                // La solicitud falló, maneja el error
                return redirect('/home')->with('danger', 'Error.');
            }
            return view('cliente.home', compact('email'));
        }
    }

    public function buscador(Request $request){
        /*$response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->post('https://biblioapidb.azurewebsites.net/api/User/Create', [
            'Filtro' => $request->parametro,
            'Palabra' => $request->buscador
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $request->json();
            return route('home.resultado', compact('documentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }*/
    }

    public function resultado($documentos){
        return view('cliente.catalogo.busqueda', compact('documentos'));
    }
}
