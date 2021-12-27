@extends('layouts.user')

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                <div class="item" style="background-image: url(assets/images/sliders/slider01.jpg);">
                    <div class="container-fluid">
                        <div class="caption vertical-center text-left">
                            <div class="big-text fadeInDown-1">
                                Save up to a<span class="big"><span class="sign">$</span>400</span>
                            </div>

                            <div class="excerpt fadeInDown-2">
                                on selected laptops<br>
                                & desktop pcs or<br>
                                smartphones
                            </div>
                            <div class="small fadeInDown-2">
                                terms and conditions apply
                            </div>
                            <div class="button-holder fadeInDown-3">
                                <a href="single-product.html" class="big le-button ">shop now</a>
                            </div>
                        </div><!-- /.caption -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.item -->

                <div class="item" style="background-image: {{ url('style/assets/images/sliders/slider03.jpg') }}">
                    <div class="container-fluid">
                        <div class="caption vertical-center text-left">
                            <div class="big-text fadeInDown-1">
                                Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                            </div>

                            <div class="excerpt fadeInDown-2">
                                on selected <br>desktop pcs<br>
                            </div>
                            <div class="small fadeInDown-2">
                                terms and conditions apply
                            </div>
                            <div class="button-holder fadeInDown-3">
                                <a href="single-product.html" class="big le-button ">shop now</a>
                            </div>
                        </div><!-- /.caption -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.item -->

            </div><!-- /.owl-carousel -->
        </div>
        <!-- ========================================= SECTION – HERO : END ========================================= -->
    </div><!-- /.homebanner-holder -->
    </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ========================================= HOME BANNERS ========================================= -->
    <section id="banner-holder" class="wow fadeInUp">
        <div class="container">
            <div class="col-xs-12 col-lg-6 no-margin banner">
                <a href="category-grid-2.html">
                    <div class="banner-text theblue">
                        <h1>New Life</h1>
                        <span class="tagline">Introducing New Category</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ url('style/assets/images/blank.gif') }}"
                        data-echo="{{ url('style/assets/images/banners/banner-narrow-01.jpg') }}" />
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                <a href="category-grid-2.html">
                    <div class="banner-text right">
                        <h1>Time &amp; Style</h1>
                        <span class="tagline">Checkout new arrivals</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ url('style/assets/images/blank.gif') }}"
                        data-echo="{{ url('style/assets/images/banners/banner-narrow-02.jpg') }}" />
                </a>
            </div>
        </div><!-- /.container -->
    </section><!-- /#banner-holder -->
    <!-- ========================================= HOME BANNERS : END ========================================= -->

    <div id="products-tab" class="wow fadeInUp">
        <div class="container">
            <div class="tab-holder">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#featured" data-toggle="tab">Barang</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="featured">
                        <div class="product-grid-holder">
                            @foreach ($barang as $data)

                                <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                    <div class="product-item">

                                        <div class="image">
                                            <img style="width: 100px" src="{{ url('img/' . $data->foto_barang) }}"
                                                class="img-fluid mt-3 mb-3">
                                        </div>
                                        <div class="body">

                                            <div class="title">
                                                <a href="single-product.html">{{ $data->nama_barang }}</a>
                                                {{-- {{ $a->nama_barang }} --}}
                                            </div>
                                            <div class="brand">{{ $data->kategori->nama_kategori }}</div>
                                        </div>
                                        <div class="prices">
                                            {{-- <div class="price-prev"></div> --}}
                                            {{-- {{ $a->harga_barang }} --}}
                                            <div class="price-current pull-right">@currency($data->harga_barang)</div>
                                        </div>

                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="{{ route('user.show',$data->nama_barang) }}" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                load more products</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ========================================= BEST SELLERS ========================================= -->

    <!-- ========================================= BEST SELLERS : END ========================================= -->

    <!-- ========================================= RECENTLY VIEWED ========================================= -->

    <!-- ========================================= RECENTLY VIEWED : END ========================================= -->

    <!-- ========================================= TOP BRANDS ========================================= -->

    <!-- ========================================= TOP BRANDS : END ========================================= -->
@endsection
