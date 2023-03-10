<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Http;

class AccesoController extends Controller
{

    public function show()
    {
        if(session()->get('email') <> null){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->post('https://biblioapidb.azurewebsites.net/api/User/Login', [
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $datajson = $response->json();
            $data = json_decode($response);
            $data = count((array) $data);
            if($data > 1){
                session(['email' => $request->email,
                'tipo' => $datajson['userType'] ]);
                return redirect('/home');
            }else{
                return redirect()->to('/login')->withErrors('Email and/or password is incorrect.');
            }
        } else {
            // La solicitud falló, maneja el error
            return redirect()->to('/login')->withErrors('Email and/or password is incorrect.');
        }
    }
}
