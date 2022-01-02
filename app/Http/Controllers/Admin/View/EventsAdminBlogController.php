<?php

namespace App\Http\Controllers\Admin\View;

use App\Event;
use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use Illuminate\Http\Request;

class EventsAdminBlogController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 5)->first();

        $footer = Footer::first();

        $eventItems = Event::all();

        return view('admin.blog.view.events', compact(
            'navigationLinks',
            'header',
            'footer',
            'eventItems'
        ));
    }
}
