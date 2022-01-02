<!-- Banner -->
<section id="banner" class="pr-css">
    <header>
        <h2>{!! $subheader->title !!}</h2>
        <p>
            {!! $subheader->description !!}
        </p>
    </header>
    @if ($subheader->bg_image)
        <div class="d-flex justify-content-center">
            <img src="{{ $subheader->bg_image }}" width="380" height="330" alt="Viva Andaz">
        </div>
    @endif
    @if ($isAdmin)
        <x-pencil-edit-subheader :item="$subheader->getRouteKey()"></x-pencil-edit-subheader>
    @endif
</section>
