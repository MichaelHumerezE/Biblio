@csrf
@include('layouts.messages')
<div class="row">
    <div class="col-12">
        <label class="form-label">Usuario - Personal</label>
        <select name="idpromocion" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user['IdUsuario'] }}">
                    - {{ $user['Usuario'] }}
                </option>
            @endforeach
            <option selected value=""> Seleccione Un Usuario Del Personal... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Formato Documento</label>
        <select name="idpromocion" class="form-control">
            @foreach ($formatoDocumentos as $formatoDocumento)
                <option value="{{ $formatoDocumento['IdFormatoDocumento'] }}">
                    - {{ $formatoDocumento['FormatoDocumento'] }}
                </option>
            @endforeach
            <option selected value=""> Seleccione Un Formato Del Documento... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Localizacion" class="form-control" name="D082_Localizacion_3"
                value="{{ isset($documento) ? $documento['D082_Localizacion_3'] : old('D082_Localizacion_3') }}">
            <label>Localizacion</label>
        </div>
    </div>
    
</div>
