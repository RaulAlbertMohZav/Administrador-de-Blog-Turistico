<article id="main" class="special my-4 pr-css">
    <header>
        <h2>{{ $eventItem->title }}</h2>
        <p>
            {!! $eventItem->description !!}
        </p>
    </header>
    <img class="image featured" src="{{ $eventItem->url_image }}" />
    <p>
        {!! $eventItem->footer !!}
    </p>
    @if ($eventItem->btn_show)
        <footer>
            <a href="{{ $eventItem->btn_href }}" target="_blank"
                class="button">{{ $eventItem->btn_text }}</a>
        </footer>
    @endif

    @if ($isAdmin)
        <a href="{{ route('form.create.events') }}"
           title="Create New Event"
           style="position: absolute !important; top: 1% !important; left: 68% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.events', $eventItem->getRouteKey()) }}"
            title="Edit Event Item - {{ $eventItem->getRouteKey() }}"
            style="position: absolute !important; top: 1% !important; left: 80% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgb(255, 206, 9) !important;">
            <i class="fas fa-pencil-alt"></i>
        </a>

        <form id="form-delete-item-event-{{$eventItem->getRouteKey()}}" action="{{route('delete.events', $eventItem->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-item-event-{{$eventItem->getRouteKey()}}"
                title="Delete Card - {{ $eventItem->getRouteKey() }}"
                style="position: absolute !important; top: 1% !important; left: 92% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-item-event-{{$eventItem->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-item-event-{{$eventItem->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</article>

<hr>
