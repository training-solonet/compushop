 <!-- ============================================================= HEADER ============================================================= -->
 <header>
    <div class="container no-padding">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo">
                <a href="{{route('user.index')}}">
                    <img alt="logo" src="{{ url('style/assets/images/logo5.PNG') }}" width="200" height="50" />
                </a>
            </div><!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
        </div><!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
            <div class="contact-row">
                <div class="phone inline">
                    <i class="fa fa-phone"></i> +6281542017888
                </div>
                <div class="contact inline">
                    <i class="fa fa-envelope"></i> contact@<span class="le-color">solonet@solonet.net.id</span>
                </div>
            </div><!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
                <form method="GET" action="{{ route('search') }}">
                    <div class="control-group">
                        <input type="text" name="search" class="search-field" id="search" placeholder="Search for item" >


                        <button type="submit" class="search-button"></button>

                    </div>
                </form>
            </div><!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div><!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
            <div class="top-cart-row-container">
                <div class="wishlist-compare-holder">
                </div>

                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                <div class="top-cart-holder dropdown animate-dropdown">
                    <div class="basket">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('keranjang.index') }}">
                            <div class="basket-item-count">
                                <a href="{{ route('keranjang.index') }}">
                                <img src="{{ url('style/assets/images/cart.png') }}" width="45" alt="" href="{{ route('keranjang.index') }}">
                            </a>
                            </div>


                        </a>

                    </div><!-- /.basket -->
                </div><!-- /.top-cart-holder -->
            </div><!-- /.top-cart-row-container -->
            <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
        </div><!-- /.top-cart-row -->
    </div><!-- /.container -->
</header>
<!-- ============================================================= HEADER : END ============================================================= -->
