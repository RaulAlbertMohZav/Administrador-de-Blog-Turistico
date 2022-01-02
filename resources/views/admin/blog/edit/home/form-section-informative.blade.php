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

    <vue-form-edit-home-section-informative
        url-form="{{ route('edit.home.section-informative', $informativehomesection->getRouteKey()) }}"
        title="{{ $informativehomesection->title }}" slogan="{{ $informativehomesection->slogan }}"
        description="{{ $informativehomesection->description }}" footer="{{ $informativehomesection->footer }}"
        btn-href-english="{{ $informativehomesection->button_english_href }}"
        btn-href-spanish="{{ $informativehomesection->button_spanish_href }}">
        <template v-slot:csrf-token>
            @csrf
        </template>
        <template v-slot:items-section-informative>
            <v-container>
                <v-row>
                    @foreach ($informativehomesection->listoptionssectionhomes as $item)
                        <v-col cols="12">
                            <p>
                                {{ $item->text }}
                            </p>
                        </v-col>
                    @endforeach
                </v-row>
            </v-container>
        </template>
    </vue-form-edit-home-section-informative>
@endsection
