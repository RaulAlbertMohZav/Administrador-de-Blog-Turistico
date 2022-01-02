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

    <vue-form-edit-restaurants url-form="{{ route('edit.fb.restaurants', $fbrestaurant->getRouteKey()) }}"
        title="{{ $fbrestaurant->title }}" description="{{ $fbrestaurant->description }}"
        url-image-db="{{ $fbrestaurant->url_image }}" :items-hours="{{ $restaurantsHours }}"
        :items-ambiences="{{ $restaurantsAmbiences }}" :items-menus="{{ $restaurantsMenus }}"
        id-restaurant="{{ $fbrestaurant->getRouteKey() }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-restaurants>
@endsection
