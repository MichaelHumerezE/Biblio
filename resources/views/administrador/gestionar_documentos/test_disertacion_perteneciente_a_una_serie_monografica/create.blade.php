@extends('administrador.admin')
@section('content')
    <div class="card mt-4">
        <div class="card-header d-inline-flex">
            <h1>Crear Documento - Test Disertación Perteneciente A Una Serie Monográfica</h1>
        </div>
        <div class="card-header d-inline-flex">
            <a href="{{ route('documentos.index') }}" class="btn btn-primary ml-auto">
                <i class="fas fa-arrow-left"></i>
                Volver</a>
        </div>
        <div class="card-body">
            <form action="{{route('documentos.store')}}" method="POST" enctype="multipart/form-data" id="create">
                @include('administrador.gestionar_documentos.test_disertacion_perteneciente_a_una_serie_monografica.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <Button class="btn btn-primary" form="create">
                <i class="fas fa-plus"></i> Crear
            </Button>
        </div>
    </div>
@endsection
