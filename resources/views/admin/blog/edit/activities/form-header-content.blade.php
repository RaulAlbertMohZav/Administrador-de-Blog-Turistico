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

    <vue-form-edit-activities-header-content
        url-form="{{ route('edit.sp.header-content', $spsectionheader->getRouteKey()) }}"
        title="{{ $spsectionheader->title }}" description="{{ $spsectionheader->description }}"
        url-pdf-item="{{ $spsectionheader->btn_href_pdf }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-activities-header-content>
@endsection
