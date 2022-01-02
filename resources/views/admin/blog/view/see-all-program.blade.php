@extends('layouts.client.app')

@section('header')

    <x-header-vivaandaz :header-info="$header" :show-footer="false" :is-admin="true">
        <x-navigation-vivaandaz :navigation-links="$navigationLinks" :is-admin="true"></x-navigation-vivaandaz>
    </x-header-vivaandaz>

@endsection

@section('content')

    <section class="wrapper style1">
        <div class="container">
            <article class="row gtr-200">
                {{-- ------------------------- --}}
                <div class="col-8 col-12-mobile" id="content">
                    <article id="main">
                        <x-header-content-see-all-programs :header-content="$headerContent1" :is-admin="true">
                        </x-header-content-see-all-programs>

                        @foreach ($sectionContentActivities as $itemContent)
                            <x-section-content-activity-see-all-programs :section-activity-program="$itemContent"
                                :is-admin="true">
                            </x-section-content-activity-see-all-programs>
                        @endforeach
                    </article>
                </div>
                {{-- -------------------------- --}}
                <div class="col-4 col-12-mobile" id="sidebar">
                    <section data-title="posts-activities-sidebar">
                        @foreach ($itemsSidebarActivities as $itemSidebar)
                            <x-item-sidebar-activity-see-all-programs :item-sidebar-activity="$itemSidebar"
                                :is-admin="true">
                            </x-item-sidebar-activity-see-all-programs>
                        @endforeach
                    </section>
                    <hr>
                    <section data-title="day-trips-sidebar">
                        <header>
                            <h3><a>Day Trips</a></h3>
                        </header>
                        <p>
                            We connect you with more experiences in Riviera Maya.
                        </p>
                        @foreach ($itemSidebarDayTrips as $dayTrip)
                            <x-day-trips-sidebar-activity-see-all-programs :item-day-trip="$dayTrip" :is-admin="true">
                            </x-day-trips-sidebar-activity-see-all-programs>
                        @endforeach
                    </section>
                </div>
            </article>
        </div>
    </section>



@endsection

@section('footer')
    <x-footer-vivaandaz :footer-info="$footer" :is-admin="true"></x-footer-vivaandaz>
@endsection
