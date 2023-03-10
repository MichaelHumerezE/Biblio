@extends('cliente.cliente')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Cameras<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Documentos</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class=""><a data-toggle="tab" href="#tab1"></a></li>
                                <li><a data-toggle="tab" href="#tab1"></a></li>
                                <li><a data-toggle="tab" href="#tab1"></a></li>
                                <li><a data-toggle="tab" href="#tab1"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->
                                    @foreach ($documentos as $documento)
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{ asset('img/'. $documento["Image"]) }}"
                                                    alt="">
                                                <div class="product-label">
                                                    <!--
                                                                <span class="sale">-10%</span>
                                                                -->
                                                    <span class="new">Disponible</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $documento['TipoPublicacion'] }}</p>
                                                <h3 class="product-name"><a href="#">{{ $documento['Titulos'] }}</a>
                                                </h3>
                                                <h4 class="product-price">{{ $documento['Editora'] }}
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="add-to-cart-btn"
                                                    href="{{ route('catalogo.show', $documento['Id']) }}">
                                                    Ver </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
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
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3></h3>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3></h3>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3></h3>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3></h3>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Más Documentos</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class=""><a data-toggle="tab" href="#tab2"></a></li>
                                <li><a data-toggle="tab" href="#tab2"></a></li>
                                <li><a data-toggle="tab" href="#tab2"></a></li>
                                <li><a data-toggle="tab" href="#tab2"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    @foreach ($documentos as $documento)
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{ asset('/img/'. $documento["Image"]) }}"
                                                    alt="">
                                                <div class="product-label">
                                                    <span class="new">Disponible</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $documento['TipoPublicacion'] }}</p>
                                                <h3 class="product-name"><a href="#">{{ $documento['Titulos'] }}</a>
                                                </h3>
                                                <h4 class="product-price">{{ $documento["Editora"] }}
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">
                                                            <a href="{{ route('catalogo.show', $documento["Id"]) }}"
                                                                style="color: white">
                                                                quick view</a> </span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="add-to-cart-btn"
                                                    href="{{ route('catalogo.show', $documento['Id']) }}">
                                                    Ver </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
