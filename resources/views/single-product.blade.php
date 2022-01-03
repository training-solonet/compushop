@extends('layouts.user')
@section('content')
    <div id="single-product">
        <div class="container">

            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="{{ url('img/' . $barang->foto_barang) }}">
                                <img style="width: 300px" src="{{ url('img/' . $barang->foto_barang) }}"
                                class="img-fluid mt-3 mb-3">
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->
                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class="no-margin col-xs-12 col-sm-7 body-holder">
                <div class="body">

                    <div class="availability"><label>Availability:</label><span class="available"> in stock</span>
                    </div>

                    <div class="title"><a href="#">{{ $barang->nama_barang }}</a></div>
                    <div class="brand">{{ $barang->kategori->nama_kategori }}</div>

                    <div class="social-row">
                        <span class="st_facebook_hcount"></span>
                        <span class="st_twitter_hcount"></span>
                        <span class="st_pinterest_hcount"></span>
                    </div>

                    {{-- <div class="buttons-holder">
                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                    </div> --}}

                    {{-- <div class="excerpt">
                        <p>{{ $barang->deskripsi }}</p>
                    </div> --}}

                    <div class="prices">
                        <div class="price-current">@currency($barang->harga_barang)</div>

                    </div>

                    <div class="detail-contant">
                        <p>{{ $barang->deskripsi }}
                            <br><span class="stock">{{ $barang->stok_barang }} in stock</span>
                        </p>
                        <form method="POST" action="{{ route('keranjang.store') }}" >
                            @csrf
                            <div class="quantity">
                                <input type="hidden" value="{{ $barang->id }}" name="id_barang">
                                <input step="1" name="jumlah_barang" value="1" title="Qty"
                                    class="input-text qty text" size="4" type="number">
                            </div>
                            <button type="submit" class="bt_main">Add to cart</button>
                        </form>
                    </div>
                </div><!-- /.body -->
            </div><!-- /.body-holder -->
        </div><!-- /.container -->
    </div><!-- /.single-product -->

    <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
    <section id="single-product-tab">
        <div class="container">
            <div class="tab-holder">

                <ul class="nav nav-tabs simple">
                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                    <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                </ul><!-- /.nav-tabs -->

                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        {{ $barang->deskripsi }}
                    </div><!-- /.tab-pane #description -->

                    <div class="tab-pane" id="additional-info">
                        <ul class="tabled-data">
                            <li>
                                <label>weight</label>
                                <div class="value">7.25 kg</div>
                            </li>
                            <li>
                                <label>dimensions</label>
                                <div class="value">90x60x90 cm</div>
                            </li>
                            <li>
                                <label>size</label>
                                <div class="value">one size fits all</div>
                            </li>
                            <li>
                                <label>color</label>
                                <div class="value">white</div>
                            </li>
                            <li>
                                <label>guarantee</label>
                                <div class="value">5 years</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <div class="meta-row">
                            <div class="inline">
                                <label>SKU:</label>
                                <span>54687621</span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <label>categories:</label>
                                <span><a href="#">-50% sale</a>,</span>
                                <span><a href="#">gaming</a>,</span>
                                <span><a href="#">desktop PC</a></span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <label>tag:</label>
                                <span><a href="#">fast</a>,</span>
                                <span><a href="#">gaming</a>,</span>
                                <span><a href="#">strong</a></span>
                            </div><!-- /.inline -->
                        </div><!-- /.meta-row -->
                    </div><!-- /.tab-pane #additional-info -->


                    <div class="tab-pane" id="reviews">
                        <div class="comments">
                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar" src="assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">John Smith</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="4"></div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus
                                                sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum
                                                egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->

                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar" src="assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">Jane Smith</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="5"></div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus
                                                sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum
                                                egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->

                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar" src="assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">John Doe</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="3"></div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus
                                                sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum
                                                egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->
                        </div><!-- /.comments -->

                        <div class="add-review row">
                            <div class="col-sm-8 col-xs-12">
                                <div class="new-review-form">
                                    <h2>Add review</h2>
                                    <form id="contact-form" class="contact-form" method="post">
                                        <div class="row field-row">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>name*</label>
                                                <input class="le-input">
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>email*</label>
                                                <input class="le-input">
                                            </div>
                                        </div><!-- /.field-row -->

                                        <div class="field-row star-row">
                                            <label>your rating</label>
                                            <div class="star-holder">
                                                <div class="star big" data-score="0"></div>
                                            </div>
                                        </div><!-- /.field-row -->

                                        <div class="field-row">
                                            <label>your review</label>
                                            <textarea rows="8" class="le-input"></textarea>
                                        </div><!-- /.field-row -->

                                        <div class="buttons-holder">
                                            <button type="submit" class="le-button huge">submit</button>
                                        </div><!-- /.buttons-holder -->
                                    </form><!-- /.contact-form -->
                                </div><!-- /.new-review-form -->
                            </div><!-- /.col -->
                        </div><!-- /.add-review -->

                    </div><!-- /.tab-pane #reviews -->
                </div><!-- /.tab-content -->

            </div><!-- /.tab-holder -->
        </div><!-- /.container -->
    </section><!-- /#single-product-tab -->
    <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= --
@endsection
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->
