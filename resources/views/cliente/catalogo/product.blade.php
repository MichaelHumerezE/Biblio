@extends('cliente.cliente')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Documento - {{ $documento['Titulos'] }}</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="">Documento</li>
                        <li class="active">Documento - {{ $documento['Titulos'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ asset('img/'.$documento["Image"]) }}" alt="">
                        </div>
                        <!--
                                                                                    <div class="product-preview">
                                                                                        <img src="./img/product03.png" alt="">
                                                                                    </div>
                                                                                    -->
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{ asset('img/'.$documento["Image"]) }}" alt="">
                        </div>
                        <!--
                                                                                    <div class="product-preview">
                                                                                        <img src="./img/product03.png" alt="">
                                                                                    </div>
                                                                                    -->
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"><b>Titulo: </b>{{ $documento['Titulos'] }}</h2>
                        <div>
                            <span class="product-available"> <b>Editora: </b> {{ $documento['Editora'] }} </span> <br>
                            <span class="product-available"><b> Fecha De Publicación: </b>{{ $documento['FechaPublicacion'] }}</span><br>
                            <span class="product-available"><b> País De Publicación: </b>{{ $documento['Pais Publicación'] }}</span>
                        </div>
                        <br>
                        <p><b>Indice: </b>{{ $documento['Indice'] }}</p>

                        <div class="qty-label">
                            <b>Formato Documento: </b>{{$documento["FormatoDocumento"]}} <br>
                            <b>Localización: </b>{{$documento["Localizacion"]}} <br>
                            <b>Nro De Inventario: </b>{{$documento["NroInventario"]}}
                        </div><br>

                        <div class="add-to-cart">
                            <button class="add-to-cart-btn" form="add"><i class="fa fa-shopping-cart"></i> Solicitar</button>
                        </div>
                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Tipo De Publicacion:</li>
                            <li><a href="#">{{ $documento['TipoPublicacion'] }}</a>
                            </li>
                            <li>Autores:</li>
                            <li><a href="#">{{ $documento['Autores'] }}</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">       </h3>
                    </div>
                </div>
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->
@endsection
