<?php

namespace App\View\Components\blog\activities;

use Illuminate\View\Component;

class spItemsSidebar extends Component
{
    public $itemSidebarActivity;
    public $isAdmin;
    public function __construct($itemSidebarActivity, $isAdmin = false)
    {
        $this->itemSidebarActivity = $itemSidebarActivity;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.activities.sp-items-sidebar');
    }
}
