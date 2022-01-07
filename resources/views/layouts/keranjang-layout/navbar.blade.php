<div class="animate-dropdown">
    <!-- ========================================= BREADCRUMB ========================================= -->
    <div id="top-mega-nav">
        <div class="container">
            <nav>
                <ul class="inline">
                    <li class="dropdown le-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> shop by Category
                        </a>
                        <ul class="dropdown-menu">
                            {{-- @foreach ($kategori as $data)
                            <li class="dropdown menu-item">
                                <a href="/search?kategori={{ $data->nama_kategori }}" class="dropdown-toggle">{{ $data->nama_kategori }}</a>
                            </li>
                            @endforeach --}}
                        </ul>
                    </li>

                    <li class="breadcrumb-nav-holder">
                        <ul>
                            <li class="breadcrumb-item">
                                <a href="{{route('user.index')}}">Home</a>
                            </li>
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->
                </ul>
            </nav>
        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
    <!-- ========================================= BREADCRUMB : END ========================================= -->
</div>
