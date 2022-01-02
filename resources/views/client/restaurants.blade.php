@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')

    <section class="container">
        <x-subheader-vivaandaz :subheader-info="$subheader"></x-subheader-vivaandaz>
        <section class="row">
            @foreach ($restaurantsItems as $restaurant)
                <x-item-restaurant-fb :item-restaurant="$restaurant"></x-item-restaurant-fb>
            @endforeach
        </section>
    </section>


@endsection

@section('footer')
    <x-footer-vivaandaz :footer-info="$footer"></x-footer-vivaandaz>
@endsection
