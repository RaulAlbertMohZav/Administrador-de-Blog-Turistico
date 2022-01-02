<div class="wrapper style2">
    <section>
        <article id="main" class="container special pr-css">
            <header>
                <h2>{{ $sectionInformative->title }}</h2>
                <p>{{ $sectionInformative->slogan }}</p>
                {{-- ----------------------------------------------- --}}
                @foreach ($sectionInformative->listoptionssectionhomes as $listOptionSection)
                    <li>{{ $listOptionSection->text }}</li>
                @endforeach

                <p>{{ $sectionInformative->description }}</p>
            </header>
            <footer>
                <h3>{{ $sectionInformative->footer }}</h3>
                <div class="container my-3 d-flex justify-content-center">

                    <a href="{{ $sectionInformative->button_english_href }}" target="_blank"
                        class="button">English </a>
                    <a href="{{ $sectionInformative->button_spanish_href }}" target="_blank"
                        class="button">Spanish</a>
                </div>
            </footer>
            @if ($isAdmin)
                <a href="{{ route('form.create.home.section-informative') }}"
                   title="Create New Section Informative"
                   style="position: absolute !important; top: 101% !important; left: 71% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(52, 175, 0, 0.952) !important;">
                    <i class="fa fa-plus" style="color: white !important;"></i>
                </a>
                <a href="{{ route('form.edit.home.section-informative', $sectionInformative->getRouteKey()) }}"
                    title="Edit Section - {{ $sectionInformative->getRouteKey() }}"
                    style="position: absolute !important; top: 101% !important; left: 83% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(29, 0, 255, 0.952) !important;">
                    <i class="fas fa-pencil-alt" style="color: white !important;"></i>
                </a>

                <form id="form-delete-section-informative-home-{{$sectionInformative->getRouteKey()}}" action="{{route('delete.home.section-informative', $sectionInformative->getRouteKey())}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a
                        href="#"
                        id="btn-delete-section-informative-home-{{$sectionInformative->getRouteKey()}}"
                        title="Delete Card - {{ $sectionInformative->getRouteKey() }}"
                        style="position: absolute !important; top: 101% !important; left: 95% !important; padding: 5px 10px !important; border-radius: 60% !important; background-color: rgba(255, 22, 22, 0.952) !important;">
                        <i class="fa fa-trash" style="color: white !important;" aria-hidden="true"></i>
                    </a>
                    <script>
                        document.getElementById("btn-delete-section-informative-home-{{$sectionInformative->getRouteKey()}}").addEventListener('click', function(e){
                            e.preventDefault();
                            Swal.fire({
                                title: 'Estas seguro de eliminar este elemento?',
                                showCancelButton: true,
                                confirmButtonText: 'Eliminar',
                                cancelButtonText: "Cancelar proceso",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('form-delete-section-informative-home-{{$sectionInformative->getRouteKey()}}').submit();
                                }
                            })
                        })
                    </script>
                </form>

            @endif
        </article>
    </section>
</div>
