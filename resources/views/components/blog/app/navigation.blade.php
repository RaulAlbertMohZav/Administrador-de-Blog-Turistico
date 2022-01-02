<nav id="nav">
    <ul>
        <li class="pr-css ">
            <a href="{{ $navigationLinks[0]->item_href }}">{{ $navigationLinks[0]->text }}</a>
            @if ($isAdmin)
                <x-pencil-edit-nav :item="$navigationLinks[0]->getRouteKey()"></x-pencil-edit-nav>
            @endif
        </li>
        {{-- ------------------------------------------------------------ --}}
        <li>
            <a>Activities</a>
            <ul>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[1]->item_href }}" target="_blank">
                        {{ $navigationLinks[1]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[1]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[2]->item_href }}">{{ $navigationLinks[2]->text }}</a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[2]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
            </ul>
        </li>
        {{-- ------------------------------------------------------------ --}}
        <li>
            <a>Concierge</a>
            <ul>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[3]->item_href }}" target="_blank">
                        {{ $navigationLinks[3]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[3]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[4]->item_href }}" target="_blank">
                        {{ $navigationLinks[4]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[4]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li>
                    <a>In Room Directory</a>
                    <ul>
                        <li class="pr-css ">
                            <a href="{{ $navigationLinks[5]->item_href }}" target="_blank">
                                {{ $navigationLinks[5]->text }}
                            </a>
                            @if ($isAdmin)
                                <x-pencil-edit-nav :item="$navigationLinks[5]->getRouteKey()"></x-pencil-edit-nav>
                            @endif
                        </li>
                        <li class="pr-css ">
                            <a href="{{ $navigationLinks[6]->item_href }}" target="_blank">
                                {{ $navigationLinks[6]->text }}
                            </a>
                            @if ($isAdmin)
                                <x-pencil-edit-nav :item="$navigationLinks[6]->getRouteKey()"></x-pencil-edit-nav>
                            @endif
                        </li>
                    </ul>
                </li>
                <li><a>Covid-19 Testing</a>
                    <ul>
                        <li class="pr-css ">
                            <a href="{{ $navigationLinks[7]->item_href }}" target="_blank">
                                {{ $navigationLinks[7]->text }}
                            </a>
                            @if ($isAdmin)
                                <x-pencil-edit-nav :item="$navigationLinks[7]->getRouteKey()"></x-pencil-edit-nav>
                            @endif
                        </li>
                        <li class="pr-css ">
                            <a href="{{ $navigationLinks[8]->item_href }}" target="_blank">
                                {{ $navigationLinks[8]->text }}
                            </a>
                            @if ($isAdmin)
                                <x-pencil-edit-nav :item="$navigationLinks[8]->getRouteKey()"></x-pencil-edit-nav>
                            @endif
                        </li>
                    </ul>
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[9]->item_href }}" target="_blank">
                        {{ $navigationLinks[9]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[9]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[10]->item_href }}" target="_blank">
                        {{ $navigationLinks[10]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[10]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[11]->item_href }}" target="_blank">
                        {{ $navigationLinks[11]->text }}
                    </a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[11]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
            </ul>
        </li>
        {{-- ----------------------------------------------------------------------------------------------------- --}}
        <li>
            <a>Food and Beverage</a>
            <ul>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[12]->item_href }}">{{ $navigationLinks[12]->text }}</a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[12]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li class="pr-css ">
                    <a href="{{ $navigationLinks[13]->item_href }}">{{ $navigationLinks[13]->text }}</a>
                    @if ($isAdmin)
                        <x-pencil-edit-nav :item="$navigationLinks[13]->getRouteKey()"></x-pencil-edit-nav>
                    @endif
                </li>
                <li><a>Meal Plans</a>
                    <ul>
                        <li><a>Groups</a>
                            <ul>
                                <li class="pr-css ">
                                    <a href="{{ $navigationLinks[14]->item_href }}" target="_blank">
                                        {{ $navigationLinks[14]->text }}
                                    </a>
                                    @if ($isAdmin)
                                        <x-pencil-edit-nav :item="$navigationLinks[14]->getRouteKey()">
                                        </x-pencil-edit-nav>
                                    @endif
                                </li>
                                <li class="pr-css ">
                                    <a href="{{ $navigationLinks[15]->item_href }}" target="_blank">
                                        {{ $navigationLinks[15]->text }}
                                    </a>
                                    @if ($isAdmin)
                                        <x-pencil-edit-nav :item="$navigationLinks[15]->getRouteKey()">
                                        </x-pencil-edit-nav>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        <li><a>Individual</a>
                            <ul>
                                <li class="pr-css ">
                                    <a href="{{ $navigationLinks[16]->item_href }}" target="_blank">
                                        {{ $navigationLinks[16]->text }}
                                    </a>
                                    @if ($isAdmin)
                                        <x-pencil-edit-nav :item="$navigationLinks[16]->getRouteKey()">
                                        </x-pencil-edit-nav>
                                    @endif
                                </li>
                                <li class="pr-css ">
                                    <a href="{{ $navigationLinks[17]->item_href }}" target="_blank">
                                        {{ $navigationLinks[17]->text }}
                                    </a>
                                    @if ($isAdmin)
                                        <x-pencil-edit-nav :item="$navigationLinks[17]->getRouteKey()">
                                        </x-pencil-edit-nav>
                                    @endif
                                </li>
                                {{-- <li><a href="#" target="_blank">All Inclusive Package Premium (English)</a></li>
                                <li><a href="#" target="_blank">All Inclusive Package Premium (Spanish)</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- ------------------------------------------------------------ --}}
        <li class="pr-css ">
            <a href="{{ $navigationLinks[18]->item_href }}">{{ $navigationLinks[18]->text }}</a>
            @if ($isAdmin)
                <x-pencil-edit-nav :item="$navigationLinks[18]->getRouteKey()"></x-pencil-edit-nav>
            @endif
        </li>
        {{-- ------------------------------------------------------------ --}}
        <li class="pr-css ">
            <a href="{{ $navigationLinks[19]->item_href }}">{{ $navigationLinks[19]->text }}</a>
            @if ($isAdmin)
                <x-pencil-edit-nav :item="$navigationLinks[19]->getRouteKey()"></x-pencil-edit-nav>
            @endif
        </li>
    </ul>
</nav>
