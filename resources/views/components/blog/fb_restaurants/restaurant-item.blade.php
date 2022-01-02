<article class="col-4 col-12-mobile special pr-css">
    <img class="image featured" src="{{ $itemRestaurant->url_image }}" alt="" />
    <header title="header">
        <h3>{{ $itemRestaurant->title }}</h3>
    </header>
    <p title="description">
        {!! $itemRestaurant->description !!}
    </p>
    <div title="hours">
        @if ($itemRestaurant->fbrestauranthours->count() > 0)
            <strong>Hours</strong>
            @foreach ($itemRestaurant->fbrestauranthours as $hourItem)
                <p>{{ $hourItem->text }}</p>
            @endforeach
        @endif
    </div>
    <div title="ambience">
        @if ($itemRestaurant->fbrestaurantambiences->count() > 0)
            <strong>Ambiences</strong>
            @foreach ($itemRestaurant->fbrestaurantambiences as $ambienceItem)
                <p>{{ $ambienceItem->text }}</p>
            @endforeach
        @endif
    </div>
    <div title="menu">
        @if ($itemRestaurant->fbrestaurantmenus->count() > 0)
            <strong>Menu</strong>
            <ul>
                @foreach ($itemRestaurant->fbrestaurantmenus as $menuItem)
                    <li>
                        <a href="{{ $menuItem->url_pdf ?? '#' }}" target="_blank">
                            {{ $menuItem->text }}
                        </a>
                    </li>
                @endforeach
            </ul>

        @endif
        <ul></ul>
    </div>
    @if ($isAdmin)
        <a href="{{ route('form.create.fb.restaurants') }}"
           title="Create New Restaurant"
           style="position: absolute !important; top: 1% !important; left: 68% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.fb.restaurants', $itemRestaurant->getRouteKey()) }}"
            title="Edit Restaurant Item - {{ $itemRestaurant->getRouteKey() }}"
            style="position: absolute !important; top: 1% !important; left: 80% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgb(255, 211, 34) !important;">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <form id="form-delete-item-restaurant-{{$itemRestaurant->getRouteKey()}}" action="{{route('delete.fb.restaurants', $itemRestaurant->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-item-restaurant-{{$itemRestaurant->getRouteKey()}}"
                title="Delete Card - {{ $itemRestaurant->getRouteKey() }}"
                style="position: absolute !important; top: 1% !important; left: 92% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-item-restaurant-{{$itemRestaurant->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-item-restaurant-{{$itemRestaurant->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</article>
