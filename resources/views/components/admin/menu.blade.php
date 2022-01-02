<nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ route('home') }}" class="b-brand">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/assets/images/favico.ico') }}" alt="Logo Viva Andaz"
                        class="logo images" />
                    <span class="font-weight-bold text-white ml-2">Viva Andaz</span>
                </div>
                <img src="{{ asset('admin/assets/images/favico.ico') }}" alt="" class="logo-thumb images" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <span></span>
            </a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menú</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Home</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Módules</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Users</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Blog</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-lock"></i></span><span class="pcoded-mtext">Manage Blog</span></a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('admin.view.home') }}" target="_blank" class="">Home</a>
                        </li>
                        {{-- --------------------------------------- --}}
                        <li class="">
                            <a href="{{ route('admin.view.see-all-programs') }}" target="_blank"
                                class="">Activities - See All Programs</a>
                        </li>
                        {{-- --------------------------------------- --}}
                        <li class="">
                            <a href="{{ route('admin.view.fb-restaurants') }}" target="_blank"
                                class="">FB -
                                Restaurants</a>
                        </li>
                        {{-- --------------------------------------- --}}
                        <li class="">
                            <a href="{{ route('admin.view.fb-experiences') }}" target="_blank"
                                class="">FB -
                                Experiencies</a>
                        </li>
                        {{-- --------------------------------------- --}}
                        <li class="">
                            <a href="{{ route('admin.view.events') }}" target="_blank"
                                class="">Events</a>
                        </li>
                        {{-- --------------------------------------- --}}
                        <li class="">
                            <a href="{{ route('admin.view.news') }}" target="_blank" class="">News</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
