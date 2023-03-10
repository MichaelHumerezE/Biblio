@extends('administrador.admin')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline">
            <h1>
                <center><b>DOCUMENTOS</b></center>
            </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('documentos.create') }}" class="btn btn-primary ml-auto"><i
                        class="fas fa-plus"></i>
                        Agregar</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Localización</th>
                            <th>Autores</th>
                            <th>Editora</th>
                            <th>Tipo Publicación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                            <tr>
                                <th>{{ $documento['Id'] }}</th>
                                <td>{{ $documento['Titulos'] }}</td>
                                <td>{{ $documento['Localizacion'] }}</td>
                                <td>{{ $documento['Autores'] }}</td>
                                <td>{{ $documento['Editora'] }}</td>
                                <td>{{ $documento['TipoPublicacion'] }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('documentos.edit', $documento['Id']) }}" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger" form="delete_{{ $documento['Id'] }}"
                                            onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form action="{{ route('documentos.destroy', $documento['Id']) }}"
                                            id="delete_{{ $documento['Id'] }}" method="POST" enctype="multipart/form-data"
                                            hidden>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
