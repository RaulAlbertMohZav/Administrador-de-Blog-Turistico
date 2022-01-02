<section class="pr-css">
    <header>
        <h2>{!! $headerContent->title !!}</h2>
        <p>
            {!! $headerContent->description !!}
        </p>
    </header>
    @if ($headerContent->btn_href_pdf)
        <footer>
            <a href="{{ $headerContent->btn_href_pdf }}" class="button" target="_blank">Open Calendar
                Activities</a>
        </footer>
    @endif

    @if ($isAdmin)
        <a href="{{ route('form.edit.sp.section-header-content', $headerContent->getRouteKey()) }}"
            title="Edit Header Content - {{ $headerContent->getRouteKey() }}"
            style="position: absolute !important; top: 74% !important; left: 85% !important; padding: 15px 20px !important; border-radius: 60% !important; background-color: rgb(74, 85, 252) !important;">
            <i class="fas fa-pencil-alt" style="color: white !important;"></i>
        </a>
    @endif

</section>
