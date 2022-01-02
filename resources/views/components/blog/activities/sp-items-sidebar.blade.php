<div class="pr-css">
    <hr>
    @if ($itemSidebarActivity->title)
        <header>
            <h3>{{ $itemSidebarActivity->title }}</h3>
        </header>
    @endif
    @if ($itemSidebarActivity->subtitle)
        <h4>{!! $itemSidebarActivity->subtitle !!}</h4>
    @endif
    <p>
        {!! $itemSidebarActivity->description !!}
    </p>

    @if ($isAdmin)
        <a href="{{ route('form.create.sp.items-sidebar') }}"
           title="Create New Section Informative"
           style="position: absolute !important; top: 25% !important; left: 68% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.sp.items-sidebar', $itemSidebarActivity->getRouteKey()) }}"
            title="Edit Item Sidebar - {{ $itemSidebarActivity->getRouteKey() }}"
            style="position: absolute !important; top: 25% !important; left: 80% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgb(0, 17, 255) !important;">
            <i class="fas fa-pencil-alt" style="color: white !important;"></i>
        </a>
        <form id="form-delete-section-item-sidebar-activity-{{$itemSidebarActivity->getRouteKey()}}" action="{{route('delete.sp.items-sidebar', $itemSidebarActivity->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-section-item-sidebar-activity-{{$itemSidebarActivity->getRouteKey()}}"
                title="Delete Card - {{ $itemSidebarActivity->getRouteKey() }}"
                style="position: absolute !important; top: 25% !important; left: 92% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-section-item-sidebar-activity-{{$itemSidebarActivity->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-section-item-sidebar-activity-{{$itemSidebarActivity->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</div>
