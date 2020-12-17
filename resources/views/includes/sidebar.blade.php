Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    {{-- <hr class="nav-separator"> --}}
                    {{-- <div class="nav-header">
                        <span>Getting Started</span>
                        <span>GS</span>
                    </div> --}}
                    <ul class="navbar-nav flex-column">

                        <li class="nav-item {{ Request::path() === 'dashboard' ? 'active' : ''}}">
                            <a class="nav-link" href="#" >
                                <span class="feather-icon"><i data-feather="home"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::path() === 'gudang' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ url('/gudang') }}" >
                                <span class="feather-icon"><i data-feather="archive"></i></span>
                                <span class="nav-link-text">Gudang</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::path() === 'produk' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ url('/produk') }}" >
                                <span class="feather-icon"><i data-feather="box"></i></span>
                                <span class="nav-link-text">Produk</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::path() === 'stok' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ url('/stok') }}" >
                                <span class="feather-icon"><i data-feather="grid"></i></span>
                                <span class="nav-link-text">Stok</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::path() === 'produksi' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ url('/produksi') }}" >
                                <span class="feather-icon"><i data-feather="command"></i></span>
                                <span class="nav-link-text">Produksi</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav
