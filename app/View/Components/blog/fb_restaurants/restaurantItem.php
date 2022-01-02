<?php

namespace App\View\Components\blog\fb_restaurants;

use Illuminate\View\Component;

class restaurantItem extends Component
{
    public $itemRestaurant;
    public $isAdmin;
    public function __construct($itemRestaurant, $isAdmin = false)
    {
        $this->itemRestaurant = $itemRestaurant;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.fb_restaurants.restaurant-item');
    }
}
