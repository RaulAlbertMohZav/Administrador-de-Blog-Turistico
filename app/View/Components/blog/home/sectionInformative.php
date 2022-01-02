<?php

namespace App\View\Components\blog\home;

use Illuminate\View\Component;

class sectionInformative extends Component
{
    public $isAdmin;
    public $sectionInformative;
    public function __construct($sectionInformative, $isAdmin = false)
    {
        $this->sectionInformative = $sectionInformative;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.home.section-informative');
    }
}
