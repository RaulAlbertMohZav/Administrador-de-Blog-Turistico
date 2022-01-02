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

    <vue-form-edit-activities-day-trips url-form="{{ route('edit.sp.day-trips', $spdaytrips->getRouteKey()) }}"
        title="{{ $spdaytrips->title }}" url-image-db="{{ $spdaytrips->url_image }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-edit-activities-day-trips>
@endsection
