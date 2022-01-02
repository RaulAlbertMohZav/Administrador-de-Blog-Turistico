<section class="pr-css">
    <header>
        <h3>{!! $sectionActivityProgram->title !!}</h3>
    </header>
    <img class="image featured" src="{{ $sectionActivityProgram->url_image }}" alt="">
    <p>
        {!! $sectionActivityProgram->description !!}
    </p>
    @if ($sectionActivityProgram->btn_show)
        <a href="{{ $sectionActivityProgram->btn_href ?? '#' }}" class="button"
            target="_blank">{{ $sectionActivityProgram->btn_text ?? 'Click Here!' }}</a>
    @endif
    @if ($sectionActivityProgram->spoptionssectioncontentactivities->count() > 0)
        <ul>
            @foreach ($sectionActivityProgram->spoptionssectioncontentactivities as $option)
                <li><a href="{{ $option->pdf_href }}">{{ $option->text }}</a></li>
            @endforeach
        </ul>
    @endif
    {{ $slot }}

    @if ($isAdmin)
        <a href="{{ route('form.create.sp.section-content') }}"
           title="Create New Section Content Activity"
           style="position: absolute !important; top: 3% !important; left: 68% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.sp.section-content', $sectionActivityProgram->getRouteKey()) }}"
            title="Edit Section Content - {{ $sectionActivityProgram->getRouteKey() }}"
            style="position: absolute !important; top: 3% !important; left: 80% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgb(221, 0, 103) !important;">
            <i class="fas fa-pencil-alt" style="color: white !important;"></i>
        </a>
        <form id="form-delete-section-content-activity-{{$sectionActivityProgram->getRouteKey()}}" action="{{route('delete.sp.content-section', $sectionActivityProgram->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-section-content-activity-{{$sectionActivityProgram->getRouteKey()}}"
                title="Delete Card - {{ $sectionActivityProgram->getRouteKey() }}"
                style="position: absolute !important; top: 3% !important; left: 92% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-section-content-activity-{{$sectionActivityProgram->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-section-content-activity-{{$sectionActivityProgram->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</section>
