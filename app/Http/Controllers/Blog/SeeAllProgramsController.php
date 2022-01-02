<?php

namespace App\Http\Controllers\Blog;

use App\Footer;
use App\Header;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Spdaytrips;
use App\Spoptionssectioncontentactivitie;
use App\Spsectioncontent;
use App\Spsectionheader;
use App\Spsectionsidebarcontent;
use App\Subheader;
use Illuminate\Http\Request;

class SeeAllProgramsController extends Controller
{
    public function index()
    {
        $navigationLinks = Navigation::all();

        $header = Header::where('id', 2)->first();

        $footer = Footer::first();

        $headerContent1 = Spsectionheader::first();

        $headerContent2 = Spsectionheader::where('id', 2)->first();

        $sectionContentActivities = Spsectioncontent::all();

        $optionsSectionContentActivities = Spoptionssectioncontentactivitie::all();

        $itemsSidebarActivities = Spsectionsidebarcontent::all();

        $itemSidebarDayTrips = Spdaytrips::all();

        return view('client.see-all-programs', compact(
            'navigationLinks',
            'header',
            'footer',
            'headerContent1',
            'headerContent2',
            'sectionContentActivities',
            'optionsSectionContentActivities',
            'itemsSidebarActivities',
            'itemSidebarDayTrips',
        ));
    }
}
