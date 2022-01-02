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

    <vue-form-edit-events url-form="{{ route('edit.events', $event->getRouteKey()) }}" title="{{ $event->title }}"
        description="{{ $event->description }}" footer="{{ $event->footer }}" url-image-db="{{ $event->url_image }}"
        btn-text="{{ $event->btn_text }}" btn-href-pdf="{{ $event->btn_href }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-events>
@endsection
