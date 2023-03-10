@csrf
@include('layouts.messages')
<div class="row">
    <div class="col-12">
        <div class="form-floating">
            <input type="text" placeholder="nombre" class="form-control" name="nombre"
                value="{{ isset($cliente) ? $cliente["nombre"] : old('nombre') }}">
            <label>Nombre</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="text" placeholder="apellido" class="form-control" name="name"
                value="{{ isset($cliente) ? $cliente["apellido"] : old('apellido') }}">
            <label>Apellidos</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="email" placeholder="email" class="form-control" name="email"
                value="{{ isset($cliente) ? $cliente["email"] : old('email') }}">
            <label>E-Mail</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="number" placeholder="telefono" class="form-control" name="telefono"
                value="{{ isset($cliente) ? $cliente["telefono"] : old('telefono') }}">
            <label>Teléfono</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="text" placeholder="direccion" class="form-control" name="direccion"
                value="{{ isset($cliente) ? $cliente["direccion"] : old('direccion') }}">
            <label>Direccion</label>
        </div>
    </div>
    <input type="hidden" name="tipoUsuario" class="form-control" id="exampleInputPassword1" value="{{$cliente["tipousuario"]}}">
    <input type="hidden" name="localId" class="form-control" id="exampleInputPassword1" value="{{$cliente["localid"]}}">
</div>
