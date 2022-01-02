@extends('layouts.admin.form-edit-layout')

@section('content')

    @if (session('status_success'))
        <v-alert type="success">
            {{ session('status_success') }}
        </v-alert>
    @endif

    @if ($errors)
        @foreach ($errors->all() as $error)
            <v-alert text prominent type="error" icon="mdi-cloud-alert">
                {{ $error }}
            </v-alert>
        @endforeach
    @endif

    {{-- @error('link_text')
        <p>{{ $message }}</p>
    @enderror
    @error('file_pdf')
        <p>{{ $message }}</p>
    @enderror --}}

    <vue-form-edit-nav url-form="{{ route('edit.nav', $navigation->getRouteKey()) }}"
        item-name="{{ $navigation->text }}" exists-pdf="{{ $existsPDF }}" item-href="{{ $navigation->item_href }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-nav>
@endsection

@push('js')
    {{-- <script>
        (function() {
            let urlPdf = "{{ $navigation->item_href }}"
            const fileInputPdf = document.getElementById('filePDFVivaandaz');
            fileInputPdf.addEventListener('change', function(e) {
                let filePDF = fileInputPdf.files[0];
                let filePDFUrlObject = URL.createObjectURL(filePDF)
                document.getElementById('Preview_PDF').setAttribute('src', filePDFUrlObject);
            })
        })()
    </script> --}}
@endpush
