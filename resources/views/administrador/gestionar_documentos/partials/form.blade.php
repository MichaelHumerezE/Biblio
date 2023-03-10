@csrf
@include('layouts.messages')
<div class="row">
    <div class="col-12">
        <label class="form-label">Usuario - Personal</label>
        <select name="IdUser" class="form-control">
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
        <select name="IdFormatoDocumento" class="form-control">
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
        <select name="Id_06_TipoRegistro_9" class="form-control">
            @foreach ($tipoRegistros as $tipoRegistro)
                <option value="{{$tipoRegistro['IdTipoRegistro']}}">
                    - {{$tipoRegistro['TipoRegistro']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">008 25 Forma del Item (110)</label>
        <select name="Id_00823_FormaItem_110" class="form-control">
            @foreach ($forItems as $forItem)
                <option value="{{$forItem['IdFormaItem']}}">
                    - {{$forItem['FormaItem']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">008 23 Tipo de material visual (114)</label>
        <select name="Id_00823_TipoMaterialVisual_114" class="form-control">
            @foreach ($tipoMaterialVisuals as $tipoMaterialVisual)
                <option value="{{$tipoMaterialVisual['IdTipoMaterialVisual']}}">
                    - {{$tipoMaterialVisual['TipoMaterialVisual']}}
                </option>
            @endforeach
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
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Escala" class="form-control" name="Escala"
                value="{{ isset($documento) ? $documento['Escala'] : old('Escala') }}">
            <label>Escala</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="VolumenSerie31" class="form-control" name="VolumenSerie31"
                value="{{ isset($documento) ? $documento['VolumenSerie31'] : old('VolumenSerie31') }}">
            <label>Volumen Nivel Serie 31</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Titulo" class="form-control" name="Titulo"
                value="{{ isset($documento) ? $documento['Titulo'] : old('Titulo') }}">
            <label>Titulo</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="NumeroFasciculoNivelSerie_32" class="form-control"
                name="NumeroFasciculoNivelSerie_32"
                value="{{ isset($documento) ? $documento['NumeroFasciculoNivelSerie_32'] : old('NumeroFasciculoNivelSerie_32') }}">
            <label>Numero Fasciculo Nivel Serie 32</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="NumeroFasciculoNivelSerie_32" class="form-control"
                name="NumeroFasciculoNivelSerie_32"
                value="{{ isset($documento) ? $documento['NumeroFasciculoNivelSerie_32'] : old('NumeroFasciculoNivelSerie_32') }}">
            <label>Numero Fasciculo Nivel Serie 32</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Id 100 Respondabilidad I 16</label>
        <select name="Id_100_Respondabilidad_I_16" class="form-control">
            @foreach ($responsabilidad100s as $responsabilidad100)
                <option value="{{$responsabilidad100['IdResponsabilidadI100']}}">
                    - {{$responsabilidad100['ResponsabilidadI100']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="260_FechaPublicacion_64" class="form-control"
                name="D260_FechaPublicacion_64"
                value="{{ isset($documento) ? $documento['260_FechaPublicacion_64'] : old('260_FechaPublicacion_64') }}">
            <label>260 FechaPublicacion 64</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="008_06_FechaNormalizada_65" class="form-control"
                name="008_06_FechaNormalizada_65"
                value="{{ isset($documento) ? $documento['008_06_FechaNormalizada_65'] : old('008_06_FechaNormalizada_65') }}">
            <label>008 06 Fecha Normalizada 65</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="100_AfiliacionInstitucional_I_16" class="form-control"
                name="100_AfiliacionInstitucional_I_16"
                value="{{ isset($documento) ? $documento['100_AfiliacionInstitucional_I_16'] : old('100_AfiliacionInstitucional_I_16') }}">
            <label>100 AfiliacionInstitucional I 16</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="022_ISSN_35" class="form-control" name="022_ISSN_35"
                value="{{ isset($documento) ? $documento['022_ISSN_35'] : old('022_ISSN_35') }}">
            <label>022 ISSN 35</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Id 245 Idioma 18</label>
        <select name="Id_245_Idioma_18" class="form-control">
            @foreach ($idiomas as $idioma)
                <option value="{{$idioma['IdIdioma']}}">
                    - {{$idioma['Idioma']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Id 110 Responsabilidad I</label>
        <select name="Id_110_Responsabilidad_I" class="form-control">
            @foreach ($responsabilidadI110s as $responsabilidadI110)
                <option value="{{$responsabilidadI110['IdResponsabilidadI110']}}">
                    - {{$responsabilidadI110['ResponsabilidadI110']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Registros" class="form-control" name="Registros"
                value="{{ isset($documento) ? $documento['Registros'] : old('Registros') }}">
            <label>Registros</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="300_PaginasNivelMonografico_20" class="form-control"
                name="300_PaginasNivelMonografico_20"
                value="{{ isset($documento) ? $documento['300_PaginasNivelMonografico_20'] : old('300_PaginasNivelMonografico_20') }}">
            <label>300 PaginasNivelMonografico 20</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="NumeroVolumenesNivelColeccion" class="form-control"
                name="NumeroVolumenesNivelColeccion"
                value="{{ isset($documento) ? $documento['NumeroVolumenesNivelColeccion'] : old('NumeroVolumenesNivelColeccion') }}">
            <label>Numero Volumenes Nivel Coleccion</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="260_Editora_62" class="form-control" name="D260_Editora_62"
                value="{{ isset($documento) ? $documento['260_Editora_62'] : old('260_Editora_62') }}">
            <label>260 Editora 62</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="250_Edicion_63" class="form-control" name="250_Edicion_63"
                value="{{ isset($documento) ? $documento['250_Edicion_63'] : old('250_Edicion_63') }}">
            <label>250 Edicion 63</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Id 008 15 17 Pais Publicacion 67</label>
        <select name="Id_008_15_17_PaisPublicacion_67" class="form-control">
            @foreach ($paisPublicacions as $paisPublicacion)
                <option value="{{$paisPublicacion['IdPaisPublicacion']}}">
                    - {{$paisPublicacion['PaisPublicacion']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Id 655 TipoPublicacion 71</label>
        <select name="Id_655_TipoPublicacion_71" class="form-control">
            @foreach ($tipoPublicacions as $tipoPublicacion)
                <option value="{{$tipoPublicacion['IdTipoPublicacion']}}">
                    - {{$tipoPublicacion['TipoPublicacion']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Tipo</label>
        <select name="IdTipo" class="form-control">
            @foreach ($tipoDocumentos as $tipoDocumento)
                <option value="{{$tipoDocumento['IdTipoDocumento']}}">
                    - {{$tipoDocumento['TipoDocumento']}}
                </option>
            @endforeach
            <option selected value=""> Seleccione una opcion... </option>
        </select>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="Indice" class="form-control" name="Indice"
                value="{{ isset($documento) ? $documento['Indice'] : old('Indice') }}">
            <label>Indice</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <div class="form-floating">
            <input type="text" placeholder="NumeroInventario" class="form-control" name="NumeroInventario"
                value="{{ isset($documento) ? $documento['NumeroInventario'] : old('NumeroInventario') }}">
            <label>Numero Inventario</label>
        </div>
    </div>
    <div class="col-12">
        <br>
        <label class="form-label">Imagen</label>
        <input class="form-control" type="file" name="imagen" />
    </div>
</div>
