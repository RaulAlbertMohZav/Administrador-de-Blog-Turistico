<?php

namespace App\View\Components\blog\app;

use Illuminate\View\Component;

class header extends Component
{
    public $headerInfo;
    public $showFooter;
    public $idBtnFooter;
    public $isAdmin;
    public function __construct($headerInfo, $showFooter, $idBtnFooter = "#", $isAdmin = false)
    {
        $this->headerInfo = $headerInfo;
        $this->showFooter = $showFooter;
        $this->idBtnFooter = $idBtnFooter;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.app.header');
    }
}
