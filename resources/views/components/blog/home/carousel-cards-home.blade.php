<!-- Carousel -->

<section class="carousel">

    <div class="reel">
        @foreach ($itemsCardsCarousel as $itemCard)
            <article class="my-3 pr-css">
                <a href="{{ $itemCard->href }}" class="image featured">
                    <img src="{{ $itemCard->url_image }}" />
                </a>
                <header>
                    <h3><a href="{{ $itemCard->href ?? "#" }}">{{ $itemCard->title }}</a></h3>
                </header>
                @if ($isAdmin)
                    <a href="{{ route('form.create.home.cards-carousel') }}"
                       title="Create New Card Carousel"
                       style="position: absolute !important; top: -5% !important; left: 66% !important; padding: 4px 9px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
                        <i class="fa fa-plus" style="color: white !important;"></i>
                    </a>
                    <a href="{{ route('form.edit.home.cards-carousel', $itemCard->getRouteKey()) }}"
                        title="Edit Card - {{ $itemCard->getRouteKey() }}"
                       style="position: absolute !important; top: -5% !important; left: 78% !important; padding: 4px 9px !important; border-radius: 60% !important; background-color: rgba(29, 0, 255, 0.952) !important;">
                    <i class="fas fa-pencil-alt" style="color: white !important;"></i>
                    </a>
                    <form id="form-delete-carousel-item-home-{{$itemCard->getRouteKey()}}" action="{{route('delete.home.carousel', $itemCard->getRouteKey())}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a
                            href="#"
                            id="btn-delete-carousel-item-home-{{$itemCard->getRouteKey()}}"
                           title="Delete Card - {{ $itemCard->getRouteKey() }}"
                           style="position: absolute !important; top: -5% !important; left: 90% !important; padding: 4px 9px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                            <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
                        </a>
                        <script>
                            document.getElementById("btn-delete-carousel-item-home-{{$itemCard->getRouteKey()}}").addEventListener('click', function(e){
                                e.preventDefault();
                                Swal.fire({
                                    title: 'Estas seguro de eliminar este elemento?',
                                    showCancelButton: true,
                                    confirmButtonText: 'Eliminar',
                                    cancelButtonText: "Cancelar proceso",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('form-delete-carousel-item-home-{{$itemCard->getRouteKey()}}').submit();
                                    }
                                })
                            })
                        </script>
                    </form>

                @endif

            </article>
        @endforeach
    </div>
</section>
