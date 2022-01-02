<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home-blog') }}">
        <img src="{{ asset('admin/assets/images/favico.ico') }}" alt="Logo Viva Andaz">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-undo" aria-hidden="true"></i>
                    to
                    return</a>
            </li>
        </ul>
    </div>
</nav>
