<?php

namespace App\Http\Controllers\Admin\View;

use App\Fbexperiencecard;
use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Subheader;
use Illuminate\Http\Request;

class FbExperiencesAdminBlogController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 4)->first();

        $footer = Footer::first();

        $subheader = Subheader::where('id', 3)->first();

        $experiencesItems = Fbexperiencecard::all();

        return view('admin.blog.view.fb-experiences', compact(
            'navigationLinks',
            'header',
            'subheader',
            'experiencesItems',
            'footer'
        ));
    }
}
