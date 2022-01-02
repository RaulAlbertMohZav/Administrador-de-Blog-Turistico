<?php

namespace App\View\Components\blog\activities;

use Illuminate\View\Component;

class SpSectionContentAct extends Component
{
    public $sectionActivityProgram;
    public $isAdmin;
    public function __construct($sectionActivityProgram, $isAdmin = false)
    {
        $this->sectionActivityProgram = $sectionActivityProgram;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.activities.sp-section-content-act');
    }
}
