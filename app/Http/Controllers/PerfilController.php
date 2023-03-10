<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePerfilRequest;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('email') <> null) {
            if (session()->get('tipo') == "Lector") {
                return redirect('cliente/home');
            } else {
                if (session()->get('tipo') == "Personal") {
                    return redirect('administrador/home');
                }
            }
        }else{
            return redirect('/home');
        }
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
        if (session()->get('tipo') == "Lector") {
            return view('perfilC.edit');
        } else {
            return view('perfil.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfilRequest $request, $id)
    {
        if (session()->get('tipo') == "Lector") {
            return redirect('cliente/home')->with('message', 'Se ha actualizado los datos correctamente.');
        } else {
            if (session()->get('tipo') == "Personal") {
                return redirect('administrador/home')->with('message', 'Se ha actualizado los datos correctamente.');
            }
        }
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
