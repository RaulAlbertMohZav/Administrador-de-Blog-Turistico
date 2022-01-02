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

    <vue-form-edit-experiences url-form="{{ route('edit.fb.experiences', $fbexperiencecard->getRouteKey()) }}"
        id-restaurant="{{ $fbexperiencecard->getRouteKey() }}" title="{{ $fbexperiencecard->title }}"
        description="{{ $fbexperiencecard->description }}" url-image-db="{{ $fbexperiencecard->url_image }}"
        id-experience="{{ $fbexperiencecard->getRouteKey() }}" :items-more-info="{{ $fbexperiencecard->moreinfoitems }}"
        :items-meal-plan-individual="{{ $fbexperiencecard->mealplanindividuals }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-experiences>
@endsection
