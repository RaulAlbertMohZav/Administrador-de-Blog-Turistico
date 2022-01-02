@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$headerHome" :show-footer="true" id-btn-footer="#banner" :is-admin="true">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks" :is-admin="true"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')
    <x-subheader-vivaandaz :subheader-info="$subHeader" :is-admin="true"></x-subheader-vivaandaz>
    <x-carousel-cards-home :items-cards-carousel="$cardsCarouselHome" :is-admin="true"></x-carousel-cards-home>
    @foreach($Informativehomesections as $Informativehomesection)
        <x-section-informative-home :section-informative="$Informativehomesection" :is-admin="true"></x-section-informative-home>
    @endforeach
@endsection


@section('footer')
    <x-footer-vivaandaz :footer-info="$footer" :is-admin="true"></x-footer-vivaandaz>
@endsection
