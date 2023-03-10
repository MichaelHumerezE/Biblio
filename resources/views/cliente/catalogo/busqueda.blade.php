@extends('cliente.cliente')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Catálogo</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="active">Catálogo</li>
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
        <?php
        $c = 0;
        $a = 0;
        ?>
        @foreach ($documentos as $documento)
            <?php
            $c = $c + 1;
            $a = $a + 1;
            ?>
            <!-- product -->
            <div class="col-md-4 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ asset('img/' . $documento["Image"]) }}" alt="...">
                        <div class="product-label">
                                <span class="new">Disponible</span>
                        </div>
                    </div>
                    <div class="product-body">
                                <p class="product-category">{{ $documento["TipoPublicacion"] }}</p>
                        <h3 class="product-name"><a href="#">{{ $documento["Titulos"] }}</a></h3>
                            <h4 class="product-price">Bs {{ $documento["Editora"] }}
                            </h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">
                                    <a href="{{ route('catalogo.show', $documento["Id"]) }}" style="color: white">
                                        quick view</a> </span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <a class="add-to-cart-btn"
                            href="{{ route('catalogo.show', $documento['Id']) }}">
                            Ver </a>
                    </div>
                </div>
            </div>
            @if ($c == 3)
                <div class="col-md-12 col-xs-6">
                    <div class="product">
                    </div>
                </div>
                <?php
                $c = 0;
                ?>
            @endif
        @endforeach
        <div class="col-md-12 col-xs-6">
            <div class="product">
            </div>
        </div>
    </div>
@endsection
