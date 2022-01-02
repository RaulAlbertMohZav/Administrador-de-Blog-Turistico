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

    <vue-form-edit-home-carousel-items url-form="{{ route('edit.home.carousel', $homeCarousel->getRouteKey()) }}"
        url-image="{{ $homeCarousel->url_image }}" title="{{ $homeCarousel->title }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-home-carousel-items>
@endsection
