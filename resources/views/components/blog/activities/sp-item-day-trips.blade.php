<section class="row gtr-50 pr-css" style="margin-top: 10px;">
    <div class="col-4">
        <img class="image fit" src="{{ $itemDayTrip->url_image }}" alt="" />
    </div>
    <div class="col-8">
        <strong>{!! $itemDayTrip->title !!}</strong>
    </div>
    @if ($isAdmin)
        <a href="{{ route('form.create.sp.items-day-trips') }}"
           title="Create New Section Informative"
           style="position: absolute !important; top: 70% !important; left: 68% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.sp.items-day-trips', $itemDayTrip->getRouteKey()) }}"
            title="Edit Item Day Trip - {{ $itemDayTrip->getRouteKey() }}"
            style="position: absolute !important; top: 70% !important; left: 80% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgb(91, 248, 0) !important;">
            <i class="fas fa-pencil-alt" style="color: white !important;"></i>
        </a>

        <form id="form-delete-item-day-trip-activity-{{$itemDayTrip->getRouteKey()}}" action="{{route('delete.sp.day-trips', $itemDayTrip->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-item-day-trip-activity-{{$itemDayTrip->getRouteKey()}}"
                title="Delete Card - {{ $itemDayTrip->getRouteKey() }}"
                style="position: absolute !important; top: 70% !important; left: 92% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-item-day-trip-activity-{{$itemDayTrip->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-item-day-trip-activity-{{$itemDayTrip->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</section>
