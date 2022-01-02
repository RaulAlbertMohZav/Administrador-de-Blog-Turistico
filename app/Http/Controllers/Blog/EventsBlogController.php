<?php

namespace App\Http\Controllers\Blog;

use App\Event;
use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use Illuminate\Http\Request;

class EventsBlogController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 5)->first();

        $footer = Footer::first();

        $eventItems = Event::all();

        return view('client.events', compact(
            'navigationLinks',
            'header',
            'footer',
            'eventItems'
        ));
    }
}
