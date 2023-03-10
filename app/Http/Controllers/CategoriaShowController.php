<?php

namespace App\Http\Controllers;

class CategoriaShowController extends Controller
{
    public function index()
    {
        $email = session()->get('email');
        return (view('cliente.categoria.index', compact('email')));
    }

    public function show($id)
    {
        $email = session()->get('email');
        return view('cliente.categoria.show', compact('email'));
    }
}
