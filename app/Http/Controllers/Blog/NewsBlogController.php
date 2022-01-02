<?php

namespace App\Http\Controllers\Blog;

use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Notice;
use Illuminate\Http\Request;

class NewsBlogController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 6)->first();

        $footer = Footer::first();

        $news = Notice::all();

        return view('client.news', compact(
            'navigationLinks',
            'header',
            'footer',
            'news'
        ));
    }
}
