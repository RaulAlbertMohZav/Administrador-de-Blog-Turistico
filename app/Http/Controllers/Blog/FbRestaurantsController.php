<?php

namespace App\Http\Controllers\Blog;

use App\Fbrestaurant;
use App\Fbrestaurantmenu;
use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Subheader;
use Illuminate\Http\Request;

class FbRestaurantsController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 3)->first();

        $subheader = Subheader::where('id', 2)->first();

        $footer = Footer::first();

        $restaurantsItems = Fbrestaurant::all();

        return view('client.restaurants', compact(
            'navigationLinks',
            'header',
            'subheader',
            'footer',
            'restaurantsItems'
        ));
    }
}
