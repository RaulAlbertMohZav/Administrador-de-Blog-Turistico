<?php

namespace App\Http\Controllers\Blog;

use App\Footer;
use App\Header;
use App\HomeCarousel;
use App\Http\Controllers\Controller;
use App\Informativehomesection;
use App\Navigation;
use App\Subheader;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $headerHome = Header::first();

        $footer = Footer::first();

        $subHeader = Subheader::first();

        $cardsCarouselHome = HomeCarousel::all();

        $Informativehomesections = Informativehomesection::all();

        return view('welcome', compact(
            'navigationLinks',
            'headerHome',
            'footer',
            'subHeader',
            'cardsCarouselHome',
            'Informativehomesections'
        ));
    }
}
