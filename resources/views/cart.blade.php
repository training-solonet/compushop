@extends('layouts.keranjang')

@section('content')
    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div class="inner-xs">
            <div class="page-header">
                <h2 class="page-title">My Cart</h2>
            </div>
        </div><!-- /.section-page-title -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>
    <section id="cart-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-9 items-holder no-margin">
                <table id="table_cart" class="table table-bordered" width="100%">
                    <thead>
                        <tr>

                            <th>Foto</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keranjang as $keranjang[0])
                        <tr>
                            <td><img style="width: 50px" src="{{ url('img/' . $keranjang[0]->barang->foto_barang) }}"
                                class="img-fluid mt-3 mb-3"></td>
                            <td>{{ $keranjang[0]->barang->nama_barang }}</td>
                            <td>{{ $keranjang[0]->jumlah_barang }}</td>
                            <td> @currency($keranjang[0]->jumlah_barang*$keranjang[0]->barang->harga_barang)</td>

                        </tr>
                        {{-- <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">

                                </a>
                            </div>


                            <div class="col-xs-12 col-sm-5 ">
                                <div class="title">
                                    <a href="#">{{ $keranjang[0]->barang->nama_barang }}</a>
                                </div>
                                <div class="brand">sony</div>
                            </div>

                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        {{ $keranjang[0]->jumlah_barang }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="price">
                                    @currency($keranjang[0]->jumlah_barang*$keranjang[0]->barang->harga_barang)
                                </div>
                                <form action="{{ route('keranjang.destroy', $keranjang[0]->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                <button class="close-btn" onclick="return confirm('yakin ingin hapus?')"><span data-feather="x-circle"></span></button>
                                </form>
                            </div>
                        </div><!-- /.cart-item --> --}}
                    @endforeach
                    </tbody>

            </table>
            </div>

            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <div class="col-xs-12 col-md-3 no-margin sidebar ">
                <div class="widget cart-summary">
                    <h1 class="border">shopping cart</h1>
                    <div class="body">
                        <ul class="tabled-data no-border inverse-bold">
                            <li>
                                <label>cart subtotal</label>
                                <div class="value pull-right">
                                    @currency($keranjang[0]->jumlah_barang*$keranjang[0]->barang->harga_barang)</div>
                            </li>
                            <li>
                                <label>shipping</label>
                                <div class="value pull-right">free shipping</div>
                            </li>
                        </ul>
                        <ul id="total-price" class="tabled-data inverse-bold no-border">
                            <li>
                                <label>order total</label>
                                <div class="value pull-right">
                                    @currency($keranjang[0]->jumlah_barang*$keranjang[0]->barang->harga_barang)</div>
                            </li>
                        </ul>
                        <div class="buttons-holder">
                            <a class="le-button big" href="checkout.html">checkout</a>
                            <a class="simple-link block" href="category-grid.html">continue shopping</a>
                        </div>
                    </div>
                </div><!-- /.widget -->


            </div><!-- /.sidebar -->

            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>
    </section>

@endsection

