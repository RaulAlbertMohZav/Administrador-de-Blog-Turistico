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

    <vue-form-edit-news url-form="{{ route('edit.notices', $notice->getRouteKey()) }}" title="{{ $notice->title }}"
        description="{{ $notice->description }}" url-video-db="{{ $notice->url_video }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-news>
@endsection
