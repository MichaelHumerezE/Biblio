<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

date_default_timezone_set('America/La_Paz');

class CierreSesionController extends Controller
{
    public function logout()
    {
        session()->forget('email');
        session()->forget('tipo');
        return redirect()->to('/login');
    }
}
