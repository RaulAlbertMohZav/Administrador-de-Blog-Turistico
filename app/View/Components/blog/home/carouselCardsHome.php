<?php

namespace App\View\Components\blog\home;

use Illuminate\View\Component;

class carouselCardsHome extends Component
{
    public $itemsCardsCarousel;
    public $isAdmin;
    public function __construct($itemsCardsCarousel, $isAdmin = false)
    {
        $this->itemsCardsCarousel = $itemsCardsCarousel;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.home.carousel-cards-home');
    }
}
