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
            <option selected value=""> Seleccione una opcion... </option>
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
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Localizacion" class="form-control" name="D082_Localizacion_3"
                value="{{ isset($documento) ? $documento['D082_Localizacion_3'] : old('D082_Localizacion_3') }}">
            <label>082 Localizacion (3)</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">06 Tipo de registro (9)</label>
        <select name="idpromocion" class="form-control">
                <option value="">
                    - 
                </option>
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">008 25 Forma del Item (110)</label>
        <select name="idpromocion" class="form-control">
                <option value="">
                    - 
                </option>
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">008 23 Tipo de material visual (114)</label>
        <select name="idpromocion" class="form-control">
                <option value="">
                    - 
                </option>
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="876 Registros 1 (7)" class="form-control" name="D876 Registros 1 (7)"
                value="{{ isset($documento) ? $documento['D876 Registros 1 (7)'] : old('D876 Registros 1 (7)') }}">
            <label>876 Registros 1 (7)</label>
        </div>
    </div>
</div>
