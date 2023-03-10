@extends('administrador.admin')
@section('content')
    <div class="card mt-4">
        <div class="card-header d-inline-flex">
            <h1>Elegir el tipo de documento a crear</h1>
        </div>
        <div class="card-header d-inline-flex">
            <a href="{{ route('documentos.index') }}" class="btn btn-primary ml-auto">
                <i class="fas fa-arrow-left"></i>
                Volver</a>
        </div>
        <div class="card-body">
            <center>
                <a href="{{route('no_convencional.create')}}" class="btn btn-success ml-auto">
                    No Convecional -></a>
                <br><br>
                <a href="{{route('monografica.create')}}" class="btn btn-success ml-auto">
                    Monográfica -></a>
                <br><br>
                <a href="{{route('coleccion_de_monografias.create')}}" class="btn btn-success ml-auto">
                    Colección De Monografías -></a>
                <br><br>
                <a href="{{route('monografia.create')}}" class="btn btn-success ml-auto">
                    Monografía -></a>
                <br><br>
                <a href="{{route('periodica.create')}}" class="btn btn-success ml-auto">
                    Periodica -></a>
                <br><br>
                <a href="{{route('monografia_perteneciente_una_coleccion.create')}}" class="btn btn-success ml-auto">
                    Monografía Perteneciente A Una Colección -></a>
                <br><br>
                <a href="{{route('test_disertacion_perteneciente_a_una_serie_monografica.create')}}" class="btn btn-success ml-auto">
                    Test - Disertación Perteneciente A Una Serie Monográfica -></a>
                <br><br>
                <a href="{{route('test_disertacion.create')}}" class="btn btn-success ml-auto">
                    Test - Disertación -></a>
                <br><br>
            </center>
        </div>
    </div>
@endsection
