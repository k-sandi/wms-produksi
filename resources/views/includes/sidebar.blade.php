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
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav
