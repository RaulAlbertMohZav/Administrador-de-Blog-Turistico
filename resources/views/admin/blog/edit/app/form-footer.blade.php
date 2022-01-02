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

    <vue-form-edit-footer url-form="{{ route('edit.footer', $footer->getRouteKey()) }}"
        item-slogan="{{ $footer->slogan }}" item-author="{{ $footer->author }}"
        href-facebook="{{ $footer->btn_facebook_href }}" href-instagram="{{ $footer->btn_instagram_href }}"
        href-pinterest="{{ $footer->btn_pinterest_href }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-footer>
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
