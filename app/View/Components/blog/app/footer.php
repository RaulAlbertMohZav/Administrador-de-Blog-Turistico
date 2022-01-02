<?php

namespace App\View\Components\blog\app;

use Illuminate\View\Component;

class footer extends Component
{
    public $footer;
    public $isAdmin;
    public function __construct($footerInfo, $isAdmin = false)
    {
        $this->footer = $footerInfo;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.app.footer');
    }
}
