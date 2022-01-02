@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')
    <x-subheader-vivaandaz :subheader-info="$subheader"></x-subheader-vivaandaz>
    <div class="container">
        <section class="row">
            @foreach ($experiencesItems as $itemExp)
                <x-item-experience-fb :item-experience-fb="$itemExp"></x-item-experience-fb>
            @endforeach
        </section>
    </div>

@endsection


@section('footer')
    <x-footer-vivaandaz :footer-info="$footer"></x-footer-vivaandaz>
@endsection
