<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ url('assets/assets/img/profile.jpg') }} " alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                    </a>
                    <div class="clearfix"></div>

                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="</demo1/index.html>" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('barang.index') }}">
                        <i class="fas fa-table"></i>
                        <p>Table Barang</p>
                        <span class="caret"></span>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}">
                        <i class="fas fa-table"></i>
                        <p>Table Kategori</p>
                        <span class="caret"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <i class="fas fa-logout"></i>
                    <p>Logout</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                    <span class="caret"></span>
                </form>
                </li>

        </div>
    </div>
</div>
<!-- End Sidebar -->
