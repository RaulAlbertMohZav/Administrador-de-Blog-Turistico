<?php

namespace App\View\Components\blog\fb_experience;

use Illuminate\View\Component;

class FbexperienceItem extends Component
{
    public $itemExperienceFb;
    public $isAdmin;
    public function __construct($itemExperienceFb, $isAdmin = false)
    {
        $this->itemExperienceFb = $itemExperienceFb;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.fb_experience.fbexperience-item');
    }
}
