@extends('layouts.keranjang')
@section('content')

    <section id="category-grid">
        <div class="container">
            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
                <!-- ========================================= PRODUCT FILTER ========================================= -->
                <div class="widget">
                    <h1>Product Filters</h1>
                    <div class="body bordered">

                        <div class="category-filter">
                            <h2>Brands</h2>
                            <hr>
                            <ul>
                                <li><input checked="checked" class="le-checkbox" type="checkbox" /> <label>Samsung</label>
                                    <span class="pull-right">(2)</span></li>
                                <li><input class="le-checkbox" type="checkbox" /> <label>Dell</label> <span
                                        class="pull-right">(8)</span></li>
                                <li><input class="le-checkbox" type="checkbox" /> <label>Toshiba</label> <span
                                        class="pull-right">(1)</span></li>
                                <li><input class="le-checkbox" type="checkbox" /> <label>Apple</label> <span
                                        class="pull-right">(5)</span></li>
                            </ul>
                        </div><!-- /.category-filter -->

                        <div class="price-filter">
                            <h2>Price</h2>
                            <hr>
                            <div class="price-range-holder">

                                <input type="text" class="price-slider" value="">

                                <span class="min-max">
                                    Price: $89 - $2899
                                </span>
                                <span class="filter-button">
                                    <a href="#">Filter</a>
                                </span>
                            </div>
                        </div><!-- /.price-filter -->

                    </div><!-- /.body -->
                </div><!-- /.widget -->
                <!-- ========================================= PRODUCT FILTER : END ========================================= -->



                <div class="widget">
                    <div class="simple-banner">
                        <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif"
                                data-echo="assets/images/banners/banner-simple.jpg" /></a>
                    </div>
                </div>

                <!-- ========================================= FEATURED PRODUCTS ========================================= -->

                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-sm-9 no-margin wide sidebar">
                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title"> Gaming </h2>

                        <div class="control-bar">
                            <div id="popularity-sort" class="le-select">
                                <select data-placeholder="sort by popularity">
                                    <option value="1">1-100 players</option>
                                    <option value="2">101-200 players</option>
                                    <option value="3">200+ players</option>
                                </select>
                            </div>

                            <div id="item-count" class="le-select">
                                <select>
                                    <option value="1">24 per page</option>
                                    <option value="2">48 per page</option>
                                    <option value="3">32 per page</option>
                                </select>
                            </div>

                            <div class="grid-list-buttons">
                                <ul>
                                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i
                                                class="fa fa-th-large"></i> Grid</a></li>
                                    <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i
                                                class="fa fa-th-list"></i> List</a></li>
                                </ul>
                            </div>
                        </div><!-- /.control-bar -->

                        <div class="tab-content">
                            <div id="grid-view" class="products-grid fade tab-pane in active">

                                <div class="product-grid-holder">
                                    @foreach ($barangs as $data)
                                        <div class="row no-margin">

                                            <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                                <div class="product-item">
                                                    <div class="ribbon red"><span>sale</span></div>
                                                    <div class="image">
                                                        <img style="width: 100px"
                                                            src="{{ url('img/' . $data->foto_barang) }}"
                                                            class="img-fluid mt-3 mb-3">
                                                    </div>
                                                    <div class="body">
                                                        <div class="label-discount green">-50% sale</div>
                                                        <div class="title">
                                                            <a href="single-product.html">{{ $data->nama_barang }}</a>
                                                            {{-- {{ $a->nama_barang }} --}}
                                                        </div>
                                                        <div class="brand">{{ $data->kategori->nama_kategori }}
                                                        </div>
                                                    </div>
                                                    <div class="prices">
                                                        {{-- <div class="price-prev"></div> --}}
                                                        {{-- {{ $a->harga_barang }} --}}
                                                        <div class="price-current pull-right">@currency($data->harga_barang)
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="add-cart-button">
                                                            <a href="{{ route('user.show', $data->slug) }}"
                                                                class="le-button">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-item -->
                                            </div><!-- /.product-item-holder -->


                                        </div><!-- /.row -->
                                        @endforeach
                                </div><!-- /.product-grid-holder -->

                                <div class="pagination-holder">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination ">
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->
                            </div><!-- /.products-grid #grid-view -->

                            <div id="list-view" class="products-grid fade tab-pane ">


                                <div class="pagination-holder">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination">
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul><!-- /.pagination -->
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div><!-- /.result-counter -->
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->

                            </div><!-- /.products-grid #list-view -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /#category-grid -->
@endsection
