<?php

namespace App\View\Components\blog\events;

use Illuminate\View\Component;

class eventItem extends Component
{
    public $eventItem;
    public $isAdmin;
    public function __construct($eventItem, $isAdmin = false)
    {
        $this->eventItem = $eventItem;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.events.event-item');
    }
}
