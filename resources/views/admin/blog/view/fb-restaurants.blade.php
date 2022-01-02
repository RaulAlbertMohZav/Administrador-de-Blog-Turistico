@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false" :is-admin="true">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks" :is-admin="true"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')

    <section class="container">
        <x-subheader-vivaandaz :subheader-info="$subheader" :is-admin="true"></x-subheader-vivaandaz>
        <section class="row">
            @foreach ($restaurantsItems as $restaurant)
                <x-item-restaurant-fb :item-restaurant="$restaurant" :is-admin="true"></x-item-restaurant-fb>
            @endforeach
        </section>
    </section>


@endsection

@section('footer')
    <x-footer-vivaandaz :footer-info="$footer" :is-admin="true"></x-footer-vivaandaz>
@endsection
