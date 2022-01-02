<?php

namespace App\View\Components\blog\activities;

use Illuminate\View\Component;

class headerContent extends Component
{
    public $headerContent;
    public $isAdmin;
    public function __construct($headerContent, $isAdmin = false)
    {
        $this->headerContent = $headerContent;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.activities.header-content');
    }
}
