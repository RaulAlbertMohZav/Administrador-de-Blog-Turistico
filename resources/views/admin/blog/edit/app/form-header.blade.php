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

    <vue-form-edit-header url-form="{{ route('edit.header', $header->getRouteKey()) }}"
        item-name="{{ $header->title }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-header>
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
