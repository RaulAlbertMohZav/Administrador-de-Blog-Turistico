<!-- Footer -->
<div id="footer" style="background-image: url('{{ $footer->bg_footer }}');">
    <div class="container-fluid">
        {{-- <div class="row">

        </div>
        <hr /> --}}
        <div class="row">
            <div class="col-12">

                <!-- Contact -->
                <section class="contact">
                    <header>
                        <h3>{{ $footer->slogan }}</h3>
                    </header>
                    <p>{{ $footer->author }}</p>
                    <ul class="icons">
                        <li>
                            <a href="{{ $footer->btn_facebook_href ?? '#' }}" class="icon brands fa-facebook-f">
                                <span class="label">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $footer->btn_instragram_href ?? '#' }}" class="icon brands fa-instagram">
                                <span class="label">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $footer->btn_pinterest_href ?? '#' }}" class="icon brands fa-pinterest">
                                <span class="label">Pinterest</span>
                            </a>
                        </li>

                    </ul>
                    @if ($isAdmin)
                        <x-pencil-edit-footer :item="$footer->getRouteKey()"></x-pencil-edit-footer>

                    @endif
                </section>

                <section class="contact">
                    <header>
                        <a href="{{ route('home') }}" target="_blank">
                            Admin
                        </a>
                    </header>
                </section>

                <!-- Copyright -->
                {{-- <div class="copyright">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('home') }}">Admin</a>
                        </li>
                    </ul>
                </div> --}}

            </div>

        </div>
    </div>
</div>

</div>
