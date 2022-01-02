<header
    class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed"
>
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        {{--<a href="{{ route('home') }}" class="b-brand">
            <img src="{{asset("admin/assets/images/logo.svg")}}" alt="Logo Viva Andaz" class="logo images" />
            <img
                src="{{asset("admin/assets/images/logo-icon.svg")}}"
                alt=""
                class="logo-thumb images"
            />
        </a>--}}
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-right profile-notification"
                    >
                        <div class="pro-head">

                            <span>{{$username}}</span>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                            <button type="submit" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </button>
                            </form>
                        </div>
                        <ul class="pro-body">
                            <li>
                                <a href="{{route('auth.profile')}}" class="dropdown-item"
                                ><i class="feather icon-user"></i> Profile</a
                                >
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                    ><i class="feather icon-lock"></i>Logout</button
                                    >
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
