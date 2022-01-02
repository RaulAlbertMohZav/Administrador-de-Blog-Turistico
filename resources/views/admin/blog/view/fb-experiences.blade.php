@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false" :is-admin="true">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks" :is-admin="true"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')
    <x-subheader-vivaandaz :subheader-info="$subheader" :is-admin="true"></x-subheader-vivaandaz>
    <div class="container">
        <section class="row">
            @foreach ($experiencesItems as $itemExp)
                <x-item-experience-fb :item-experience-fb="$itemExp" :is-admin="true"></x-item-experience-fb>
            @endforeach
        </section>
    </div>

@endsection


@section('footer')
    <x-footer-vivaandaz :footer-info="$footer" :is-admin="true"></x-footer-vivaandaz>
@endsection
