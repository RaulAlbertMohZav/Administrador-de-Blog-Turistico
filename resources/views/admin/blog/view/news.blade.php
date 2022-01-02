@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false" :is-admin="true">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks" :is-admin="true"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')
    <section class="wrapper style1">
        <div class="container">
            @foreach ($news as $notice)
                <x-notice-item :notice-item="$notice" :is-admin="true"></x-notice-item>
            @endforeach
        </div>
    </section>
@endsection



@section('footer')
    <x-footer-vivaandaz :footer-info="$footer" :is-admin="true"></x-footer-vivaandaz>
@endsection
