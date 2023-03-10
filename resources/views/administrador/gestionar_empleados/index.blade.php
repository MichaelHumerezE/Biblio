@extends('administrador.admin')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline">
            <h1>
                <center><b>EMPLEADOS</b></center>
            </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('empleados.create') }}" class="btn btn-primary ml-auto">
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
                        @foreach ($empleados as $empleado)
                            <tr>
                                <th>{{ $empleado['id'] }}</th>
                                <td>{{ $empleado['nombre'] }}</td>
                                <td>{{ $empleado['apellido'] }}</td>
                                <td>{{ $empleado['correo'] }}</td>
                                <td>{{ $empleado['telefono'] }}</td>
                                <td>{{ $empleado['direccion'] }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('empleados.edit', $empleado['id']) }}" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger" form="delete_{{ $empleado['id'] }}"
                                            onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form action="{{ route('empleados.destroy', $empleado['id']) }}"
                                            id="delete_{{ $empleado['id'] }}" method="POST" enctype="multipart/form-data"
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
