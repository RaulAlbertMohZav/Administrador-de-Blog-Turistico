<?php

namespace App\View\Components\blog\app;

use Illuminate\View\Component;

class subheader extends Component
{
    public $subheader;
    public $isAdmin;
    public function __construct($subheaderInfo, $isAdmin = false)
    {
        $this->subheader = $subheaderInfo;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.app.subheader');
    }
}
