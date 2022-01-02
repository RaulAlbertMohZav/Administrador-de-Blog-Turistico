<?php

namespace App\View\Components\blog\activities;

use Illuminate\View\Component;

class SpItemDayTrips extends Component
{
    public $itemDayTrip;
    public $isAdmin;
    public function __construct($itemDayTrip, $isAdmin = false)
    {
        $this->itemDayTrip = $itemDayTrip;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.activities.sp-item-day-trips');
    }
}
