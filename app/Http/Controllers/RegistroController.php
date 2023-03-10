<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Bitacora;
use App\Models\Carrito;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

date_default_timezone_set('America/La_Paz');

class RegistroController extends Controller
{
    public function show()
    {
        if(session()->get('email') <> null){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(StoreClienteRequest $request)
    {
        $request->validated();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->post('https://biblioapidb.azurewebsites.net/api/User/Create', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'userType' => $request->userType
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            return redirect('/login')->with('success', 'Account created successfully.');
        } else {
            // La solicitud falló, maneja el error
            return redirect('/registro')->with('danger', 'Account not created.');
        }
    }
}
