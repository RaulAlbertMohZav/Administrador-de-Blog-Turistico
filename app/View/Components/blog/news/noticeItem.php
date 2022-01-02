<?php

namespace App\View\Components\blog\news;

use Illuminate\View\Component;

class noticeItem extends Component
{
    public $noticeItem;
    public $isAdmin;
    public function __construct($noticeItem, $isAdmin = false)
    {
        $this->noticeItem = $noticeItem;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.news.notice-item');
    }
}
