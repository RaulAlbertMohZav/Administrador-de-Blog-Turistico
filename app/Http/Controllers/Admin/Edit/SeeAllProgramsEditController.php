<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ManageFileStorage;
use App\Spdaytrips;
use App\Spsectioncontent;
use App\Spsectionheader;
use App\Spsectionsidebarcontent;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SeeAllProgramsEditController extends Controller
{
    use ManageFileStorage;

    /* ------------------------- Header Content ------------------------- */

    public function form_edit_sp_header_content(Spsectionheader $spsectionheader)
    {
        return view('admin.blog.edit.activities.form-header-content', compact('spsectionheader'));
    }

    public function create_header_content(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'description' => ['required', 'string', 'min:3', 'max:700'],
            'file_pdf' => ['required', 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $spsectionheader = new Spsectionheader;

        $spsectionheader->title = $request->get('title');
        $spsectionheader->description = $request->get('description');

        if ($request->hasFile('file_pdf')) {
            $spsectionheader->btn_href_pdf = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_activities_sp_pdf'), $request->file('file_pdf'));
        }

        $spsectionheader->save();
        return redirect()->back()->with('status_success', 'Header content saved successfully.');
    }

    public function edit_header_content(Request $request, Spsectionheader $spsectionheader)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'description' => ['required', 'string', 'min:3', 'max:700'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $spsectionheader->title = $request->get('title');
        $spsectionheader->description = $request->get('description');

        if ($request->hasFile('file_pdf')) {
            $spsectionheader->btn_href_pdf = $this->appStorageProcess($spsectionheader->btn_href_pdf, config('storage_vivaandaz.url_base_storage_activities_sp_pdf'), $request->file('file_pdf'));
        }

        $spsectionheader->save();
        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_header_content(Request $request, Spsectionheader $spsectionheader)
    {

        $nameFile = $this->getNameFileDB($spsectionheader->btn_href_pdf);
        $urlBase = config('storage_vivaandaz.url_base_storage_activities_sp_pdf');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $spsectionheader->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    /* ------------------------- Section Content ------------------------- */

    public function form_create_sp_section_content()
    {
        return view('admin.blog.edit.activities.form-create-sp-section-content');
    }
    public function form_edit_sp_section_content(Spsectioncontent $spsectioncontent)
    {
        return view('admin.blog.edit.activities.form-sp-section-content', compact('spsectioncontent'));
    }

    public function create_sp_section_content(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'description' => ['required', 'string', 'min:3', 'max:700'],
            'file_image' => ['required', 'image', 'max:51200'],
            /*'btn_show' => ['required', 'boolean'],
            'btn_text' => [Rule::requiredIf($request->get('btn_text')), 'string', 'min:3', 'max:25'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],*/
        ]);

        $spsectioncontent = new Spsectioncontent;

        $spsectioncontent->title = $request->get('title');
        $spsectioncontent->description = $request->get('description');
        $spsectioncontent->btn_show = $request->get('btn_show');
        $spsectioncontent->btn_text = $request->get('btn_text');

        if ($request->hasFile('file_image')) {
            $spsectioncontent->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_activities_sp_images_content'), $request->file('file_img'));
        }

        if ($request->hasFile('file_pdf')) {
            $spsectioncontent->btn_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_activities_sp_pdf'), $request->file('file_pdf'));
        }

        $spsectioncontent->save();

        return redirect()->back()->with('status_success', 'Section content created successfully.');
    }
    public function edit_sp_section_content(Request $request, Spsectioncontent $spsectioncontent)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'description' => ['required', 'string', 'min:3', 'max:700'],
            'file_image' => [Rule::requiredIf($request->hasFile('file_image')), 'image', 'max:51200'],
            'btn_text' => [Rule::requiredIf($request->get('btn_text')), 'string', 'min:3', 'max:25'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
        ]);
        $spsectioncontent->title = $request->get('title');
        $spsectioncontent->description = $request->get('description');
        $spsectioncontent->btn_text = $request->get('btn_text') ?? $spsectioncontent->btn_text;

        if ($request->hasFile('file_image')) {
            $spsectioncontent->url_image = $this->appStorageProcess($spsectioncontent->url_image, config('storage_vivaandaz.url_base_storage_activities_sp_images_content'), $request->file('file_image'));
        }

        if ($request->hasFile('file_pdf')) {
            $spsectioncontent->btn_href = $this->appStorageProcess($spsectioncontent->btn_href, config('storage_vivaandaz.url_base_storage_activities_sp_pdf'), $request->file('file_pdf'));
        }


        $spsectioncontent->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_sp_section_content(Request $request, Spsectioncontent $spsectioncontent)
    {

        $nameFile = $this->getNameFileDB($spsectioncontent->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_activities_sp_images_content');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }
        $nameFile = $this->getNameFileDB($spsectioncontent->btn_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_activities_sp_pdf');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        foreach ($spsectioncontent->spoptionssectioncontentactivities as $optionSectionContent){
            $nameFile = $this->getNameFileDB($optionSectionContent->pdf_href);
            $urlBase = config('storage_vivaandaz.url_base_storage_activities_sp_pdf');

            if ($this->existsFileStorage($urlBase, $nameFile)) {
                $this->deleteFileStorage("{$urlBase}/{$nameFile}");
            }
            $optionSectionContent->delete();
        }

        $spsectioncontent->delete();

        return redirect()->back()->with('status_success', 'Section content delete successfully.');
    }

    /* ------------------------- Item Content Sidebar ------------------------- */

    public function form_create_sp_items_sidebar()
    {
        return view('admin.blog.edit.activities.form-create-sp-items-sidebar');
    }

    public function form_edit_sp_items_sidebar(Spsectionsidebarcontent $spsectionsidebarcontent)
    {
        return view('admin.blog.edit.activities.form-sp-items-sidebar', compact('spsectionsidebarcontent'));
    }

    public function create_sp_item_sidebar(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'subtitle' => [Rule::requiredIf($request->get('subtitle'))],
            'description' => ['required', 'string', 'min:3', 'max:700'],
        ]);

        if ($request->get('subtitle')) {
            $request->validate([
                'subtitle' => ['string', 'min:3', 'max:80'],
            ]);
        }

        $spsectionsidebarcontent = new Spsectionsidebarcontent;

        $spsectionsidebarcontent->title = $request->get('title');
        $spsectionsidebarcontent->subtitle = $request->get('subtitle');
        $spsectionsidebarcontent->description = $request->get('description');
        $spsectionsidebarcontent->save();

        return redirect()->back()->with('status_success', 'Item section content sidebar created successfully.');
    }
    public function edit_sp_item_sidebar(Request $request, Spsectionsidebarcontent $spsectionsidebarcontent)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:60'],
            'subtitle' => [Rule::requiredIf($request->get('subtitle'))],
            'description' => ['required', 'string', 'min:3', 'max:700'],
        ]);

        if ($request->get('subtitle')) {
            $request->validate([
                'subtitle' => ['string', 'min:3', 'max:80'],
            ]);
        }

        $spsectionsidebarcontent->title = $request->get('title');
        $spsectionsidebarcontent->subtitle = $request->get('subtitle');
        $spsectionsidebarcontent->description = $request->get('description');
        $spsectionsidebarcontent->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_sp_item_sidebar(Request $request, Spsectionsidebarcontent $spsectionsidebarcontent)
    {

        $spsectionsidebarcontent->delete();

        return redirect()->back()->with('status_success', 'Item section content deleted successfully.');
    }

    /* ------------------------- Sp Item Day Trip ------------------------- */

    public function form_create_sp_item_day_trip()
    {
        return view('admin.blog.edit.activities.form-create-sp-day-trips');
    }

    public function form_edit_sp_item_day_trip(Spdaytrips $spdaytrips)
    {
        return view('admin.blog.edit.activities.form-sp-day-trips', compact('spdaytrips'));
    }

    public function create_sp_item_day_trip(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:30'],
            'image' => ['required', 'image', 'max:51200'],
        ]);

        $spdaytrips = new Spdaytrips;

        $spdaytrips->title = $request->get('title');

        if ($request->hasFile('image')) {
            $spdaytrips->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_activities_sp_images_day_trips'), $request->file('image'));
        }

        $spdaytrips->save();

        return redirect()->back()->with('status_success', 'Item day trip created successfully.');
    }

    public function edit_sp_item_day_trip(Request $request, Spdaytrips $spdaytrips)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:30'],
            'image' => [Rule::requiredIf($request->hasFile('image')), 'image', 'max:51200'],
        ]);

        $spdaytrips->title = $request->get('title');
        if ($request->hasFile('image')) {
            $spdaytrips->url_image = $this->appStorageProcess($spdaytrips->url_image, config('storage_vivaandaz.url_base_storage_activities_sp_images_day_trips'), $request->file('image'));
        }
        $spdaytrips->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_sp_item_day_trip(Request $request, Spdaytrips $spdaytrips)
    {

        $nameFile = $this->getNameFileDB($spdaytrips->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_activities_sp_images_day_trips');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $spdaytrips->delete();

        return redirect()->back()->with('status_success', 'Item day trip deleted successfully.');
    }
}
