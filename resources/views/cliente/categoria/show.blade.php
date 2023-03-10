@extends('cliente.cliente')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Categoria-Nombre</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="active">Categorías</li>
                        <li class="active">Categoria-Nombre</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- store products -->
    <div class="row">
        
    </div>
@endsection
