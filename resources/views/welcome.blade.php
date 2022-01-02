@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$headerHome" :show-footer="true" id-btn-footer="#banner">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')
    <x-subheader-vivaandaz :subheader-info="$subHeader"></x-subheader-vivaandaz>
    <x-carousel-cards-home :items-cards-carousel="$cardsCarouselHome"></x-carousel-cards-home>
    @foreach($Informativehomesections as $Informativehomesection)
        <x-section-informative-home :section-informative="$Informativehomesection"></x-section-informative-home>
    @endforeach

@endsection


@section('footer')
    <x-footer-vivaandaz :footer-info="$footer"></x-footer-vivaandaz>
@endsection
