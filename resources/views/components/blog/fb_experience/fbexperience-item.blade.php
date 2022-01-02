<article class="col-4 col-12-mobile special pr-css">
    <img class="image featured" src="{{ $itemExperienceFb->url_image }}" alt="" />
    <header>
        <h3>{{ $itemExperienceFb->title }}</h3>
    </header>
    <p>
        {!! $itemExperienceFb->description !!}
    </p>
    @if ($itemExperienceFb->moreinfoitems->count() > 0)
        <div data-title="More Info">
            <strong>More Info</strong>
            <ul>
                @foreach ($itemExperienceFb->moreinfoitems as $itemInfo)
                    <li><a href="{{ $itemInfo->item_href }}" target="_blank">{{ $itemInfo->text }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($itemExperienceFb->mealplanindividuals->count() > 0)
        <div data-title="More Info">
            <strong>Meal Plan Individual</strong>
            <ul>
                @foreach ($itemExperienceFb->mealplanindividuals as $itemMealPlanInd)
                    <li><a href="{{ $itemMealPlanInd->item_href }}" target="_blank">{{ $itemMealPlanInd->text }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($isAdmin)
        <a href="{{ route('form.create.fb.experiences') }}"
            title="Create Experience Item"
            style="position: absolute !important; top: 1% !important; left: 68% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
            <i class="fa fa-plus" style="color: white !important;"></i>
        </a>
        <a href="{{ route('form.edit.fb.experiences', $itemExperienceFb->getRouteKey()) }}"
            title="Edit Experience Item - {{ $itemExperienceFb->getRouteKey() }}"
            style="position: absolute !important; top: 1% !important; left: 80% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgb(255, 211, 34) !important;">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <form id="form-delete-item-experience-{{$itemExperienceFb->getRouteKey()}}" action="{{route('delete.fb.experiences', $itemExperienceFb->getRouteKey())}}" method="POST">
            @method('DELETE')
            @csrf
            <a
                href="#"
                id="btn-delete-item-experience-{{$itemExperienceFb->getRouteKey()}}"
                title="Delete Card - {{ $itemExperienceFb->getRouteKey() }}"
                style="position: absolute !important; top: 1% !important; left: 92% !important; padding: 9px 14px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
            </a>
            <script>
                document.getElementById("btn-delete-item-experience-{{$itemExperienceFb->getRouteKey()}}").addEventListener('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro de eliminar este elemento?',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: "Cancelar proceso",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-delete-item-experience-{{$itemExperienceFb->getRouteKey()}}').submit();
                        }
                    })
                })
            </script>
        </form>
    @endif
</article>
