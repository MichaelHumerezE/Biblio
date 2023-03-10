<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DocumentoController extends Controller
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
            return view('administrador.gestionar_documentos.index', compact('email', 'documentos'));
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
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $documentos = $response->json();
            $forItems = $documentos["FormaItem"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            $idiomas = $documentos["Idioma"];
            $paisPublicacions = $documentos["PaisPublicacion"];
            $responsabilidad100s = $documentos["ResponsabilidadI100"];
            $responsabilidadI110s = $documentos["ResponsabilidadI110"];
            $tipoDocumentos = $documentos["TipoDocumento"];
            $tipoMaterialVisuals = $documentos["TipoMaterialVisual"];
            $tipoPublicacions = $documentos["TipoPublicacion"];
            $tipoRegistros = $documentos["TipoRegistro"];
            $users = $documentos["UserPersonal"];
            return view('administrador.gestionar_documentos.create', 
            compact('email', 'forItems', 'formatoDocumentos', 'idiomas', 'paisPublicacions', 'responsabilidad100s', 
            'responsabilidadI110s', 'tipoDocumentos', 'tipoMaterialVisuals', 'tipoPublicacions', 
            'tipoRegistros', 'users'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create1()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.no_convencional.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create2()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.monografica.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create3()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.coleccion_de_monografias.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create4()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.monografia.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create5()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.periodica.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create6()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.monografia_perteneciente_una_coleccion.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create7()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $users = $documentos["User"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            return view('administrador.gestionar_documentos.test_disertacion_perteneciente_a_una_serie_monografica.create', compact('email', 'users', 'formatoDocumentos'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    public function create8()
    {
        $email = session()->get('email');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
            ->get('https://biblioapidb.azurewebsites.net/api/User/GetDatosRegisterDocs');
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            $documentos = $response->json();
            $forItems = $documentos["FormaItem"];
            $formatoDocumentos = $documentos["FormatoDocumento"];
            $idiomas = $documentos["Idioma"];
            $paisPublicacions = $documentos["PaisPublicacion"];
            $responsabilidad100s = $documentos["ResponsabilidadI100"];
            $responsabilidadI110s = $documentos["ResponsabilidadI110"];
            $tipoDocumentos = $documentos["TipoDocumento"];
            $tipoMaterialVisuals = $documentos["TipoMaterialVisual"];
            $tipoPublicacions = $documentos["TipoPublicacion"];
            $tipoRegistros = $documentos["TipoRegistro"];
            $users = $documentos["UserPersonal"];
            return view('administrador.gestionar_documentos.test_disertacion.create', 
            compact('email', 'forItems', 'formatoDocumentos', 'idiomas', 'paisPublicacions', 'responsabilidad100s', 
            'responsabilidadI110s', 'tipoDocumentos', 'tipoMaterialVisuals', 'tipoPublicacions', 
            'tipoRegistros', 'users'));
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = '';
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('public/img/', $filename);
            $img = $filename;
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->post('https://biblioapidb.azurewebsites.net/api/User/PostDocsCreate', [
            'IdUser' => $request["IdUser"],
            'IdFormatoDocumento' => $request['IdFormatoDocumento'],
            'D082_Localizacion_3' => $request['D082_Localizacion_3'],
            'Id_06_TipoRegistro_9' => $request['Id_06_TipoRegistro_9'],
            'Id_00823_FormaItem_110' => $request['Id_00823_FormaItem_110'],
            'Id_00823_TipoMaterialVisual_114' => $request['Id_00823_TipoMaterialVisual_114'],
            'Titulo' => $request['Titulo'],
            'Id_100_Respondabilidad_I_16' => $request['Id_100_Respondabilidad_I_16'],
            'D260_FechaPublicacion_64' => $request['D260_FechaPublicacion_64'],
            'Id_245_Idioma_18' => $request['Id_245_Idioma_18'],
            'Id_110_Responsabilidad_I' => $request['Id_110_Responsabilidad_I'],
            'D260_Editora_62' => $request['D260_Editora_62'],
            'Id_008_15_17_PaisPublicacion_67' => $request['Id_008_15_17_PaisPublicacion_67'],
            'Id_655_TipoPublicacion_71' => $request['Id_655_TipoPublicacion_71'],
            'IdTipo' => $request['IdTipo'],
            'Indice' => $request['Indice'],
            'NumeroInventario' => $request['NumeroInventario'],
            'imagen' => $img,
        ]);
        if ($response->successful()) {
            // La solicitud fue exitosa, procesa la respuesta
            return redirect('/administrador/documentos')->with('success', 'successfully.');
        } else {
            // La solicitud falló, maneja el error
            return redirect('/home')->with('danger', 'Error.');
        }
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
        return view('administrador.gestionar_documentos.show', compact('email'));
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
