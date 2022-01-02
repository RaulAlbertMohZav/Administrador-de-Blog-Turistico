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

    <vue-form-edit-activities-section-content
        url-form="{{ route('edit.sp.content-section', $spsectioncontent->getRouteKey()) }}"
        title="{{ $spsectioncontent->title }}" url-image-db="{{ $spsectioncontent->url_image }}"
        description="{{ $spsectioncontent->description }}" show-btn="{{ $spsectioncontent->btn_show }}"
        btn-text="{{ $spsectioncontent->btn_text }}" btn-href="{{ $spsectioncontent->btn_href }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-activities-section-content>
@endsection
