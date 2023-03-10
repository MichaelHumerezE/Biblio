@extends('administrador.admin')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline">
            <h1>
                <center><b>LECTORES</b></center>
            </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary ml-auto">
                        <i class="fas fa-plus"></i>
                        Agregar</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <th>{{ $cliente['id'] }}</th>
                                <td>{{ $cliente['nombre'] }}</td>
                                <td>{{ $cliente['apellido'] }}</td>
                                <td>{{ $cliente['correo'] }}</td>
                                <td>{{ $cliente['telefono'] }}</td>
                                <td>{{ $cliente['direccion'] }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('clientes.edit', $cliente['id']) }}" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger" form="delete_{{ $cliente['id'] }}"
                                            onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form action="{{ route('clientes.destroy', $cliente['id']) }}"
                                            id="delete_{{ $cliente['id'] }}" method="POST" enctype="multipart/form-data"
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
