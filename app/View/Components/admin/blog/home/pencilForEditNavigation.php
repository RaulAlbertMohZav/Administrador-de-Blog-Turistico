<?php

namespace App\View\Components\admin\blog\home;

use Illuminate\View\Component;

class pencilForEditNavigation extends Component
{
    public $itemKey;
    public function __construct($item)
    {
        $this->itemKey = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.blog.home.pencil-for-edit-navigation');
    }
}
