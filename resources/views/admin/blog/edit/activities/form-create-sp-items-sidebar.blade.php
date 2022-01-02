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

    <vue-form-create-activities-item-sidebar
        url-form="{{ route('create.sp.items-sidebar') }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
    </vue-form-create-activities-item-sidebar>
@endsection
