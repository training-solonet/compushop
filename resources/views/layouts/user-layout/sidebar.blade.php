<div id="top-banner-and-menu">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i> all departments</div>
                <nav class="yamm megamenu-horizontal" role="navigation">
                    <ul class="nav">

                        @foreach ($kategori as $data)
                        <li class="dropdown menu-item">
                            <a href="/search?kategori={{ $data->nama_kategori }}" class="dropdown-toggle">{{ $data->nama_kategori }}</a>
                        </li>
                        @endforeach







                    </ul><!-- /.nav -->
                </nav><!-- /.megamenu-horizontal -->
            </div><!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->
        </div><!-- /.sidemenu-holder -->

        <div class="col-xs-5 col-sm-5 col-md-4 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div id="hero">
                <div id="owl-main" class="col-md-4 owl-carousel owl-inner-nav owl-ui-sm">

                    <div class="item" style="">
                        <img src="{{ url('style/assets/images/sliders/slider01.jpg') }}" alt="">
                        <div class="container-fluid">
                            <div class="caption vertical-center text-left">
                                <div class="big-text fadeInDown-1">
                                    SALE<span class="big"><span class="sign"></span>30%</span>
                                </div>

                                <div class="excerpt fadeInDown-2">
                                    ONLY laptop<br>
                                    new user ONLY<br>
                                </div>


                            </div><!-- /.caption -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.item -->

                    <div class="item" style=" height: 200px">
                        <div class="container-fluid">
                            <div class="caption vertical-center text-left">
                                <img src="{{ url('style/assets/images/sliders/slider01.jpg') }}" alt="">
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
