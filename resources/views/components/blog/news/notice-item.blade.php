<article id="main" class="special my-4 pr-css">
    <header>
        <h2>{{ $noticeItem->title }}</h2>
    </header>
    <p>
        {!! $noticeItem->description !!}
    </p>
    @if ($noticeItem->url_video)
        <video class="image featured" id="sampleAndaz" src="{{ $noticeItem->url_video }}" controls></video>
    @endif
    @if ($isAdmin)
        <a href="{{ route('form.create.news', $noticeItem->getRouteKey()) }}"
            title="Edit Notice Item - {{ $noticeItem->getRouteKey() }}"
            style="position: absolute !important; top: 5% !important; left: 68% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.news', $noticeItem->getRouteKey()) }}"
            title="Edit Notice Item - {{ $noticeItem->getRouteKey() }}"
            style="position: absolute !important; top: 5% !important; left: 80% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgb(255, 206, 9) !important;">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <form id="form-delete-item-notice-{{$noticeItem->getRouteKey()}}" action="{{route('delete.notices', $noticeItem->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-item-notice-{{$noticeItem->getRouteKey()}}"
                title="Delete Card - {{ $noticeItem->getRouteKey() }}"
                style="position: absolute !important; top: 5% !important; left: 92% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-item-notice-{{$noticeItem->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-item-notice-{{$noticeItem->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</article>

<hr>
