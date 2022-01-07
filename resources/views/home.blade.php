@extends('layouts.user')

@section('content')


    <!-- ========================================= HOME BANNERS ========================================= -->

    <!-- ========================================= HOME BANNERS : END ========================================= -->

    <div id="products-tab" class="wow fadeInUp">
        <div class="container">
            <div class="tab-holder">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#featured" data-toggle="tab">Shop</a></li>

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
                                                <a href="{{ route('user.show',$data->slug) }}" class="le-button">add to cart</a>
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
