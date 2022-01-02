<?php

namespace App\Http\Controllers\Blog;

use App\Fbexperiencecard;
use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Subheader;
use Illuminate\Http\Request;

class FbExperienciesController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 4)->first();

        $footer = Footer::first();

        $subheader = Subheader::where('id', 3)->first();

        $experiencesItems = Fbexperiencecard::all();

        return view('client.f&b-experience', compact(
            'navigationLinks',
            'header',
            'subheader',
            'experiencesItems',
            'footer'
        ));
    }
}
