<?php

namespace App\Http\Controllers\Admin\Edit;

use App\HomeCarousel;
use App\Http\Controllers\Traits\ManageFileStorage;
use App\Http\Controllers\Controller;
use App\Informativehomesection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class HomeEditController extends Controller
{
    use ManageFileStorage;

    /* Home Carousel */
    public function form_create_cards_carousel()
    {
        return view('admin.blog.edit.home.form-create-item-carousel');
    }

    public function form_edit_cards_carousel(HomeCarousel $homeCarousel)
    {
        return view('admin.blog.edit.home.form-carousel', compact('homeCarousel'));
    }

    public function create_carousel_items(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:15'],
            'file_img' => ['required', 'image', 'max:51200']
        ]);

        $homeCarousel = new HomeCarousel;

        $homeCarousel->title = $request->get('title');
        $homeCarousel->href = null;
        //$homeCarousel->url_image = $request->get('title') ?? $homeCarousel->url_image;
        //$homeCarousel->href = $homeCarousel->href;

        if ($request->hasFile('file_img')) {
            $homeCarousel->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_home_carousel'), $request->file('file_img'));
        }

        $homeCarousel->save();

        return redirect()->back()->with('status_success', 'New carousel item created successfully.');
    }

    public function edit_carousel_items(Request $request, HomeCarousel $homeCarousel)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:15'],
            'file_img' => [Rule::requiredIf($request->hasFile('file_img')), 'image', 'max:51200']
        ]);

        $homeCarousel->title = $request->get('title');
        //$homeCarousel->url_image = $request->get('title') ?? $homeCarousel->url_image;
        //$homeCarousel->href = $homeCarousel->href;

        if ($request->hasFile('file_img')) {
            $homeCarousel->url_image = $this->appStorageProcess($homeCarousel->url_image, config('storage_vivaandaz.url_base_storage_home_carousel'), $request->file('file_img'));
        }

        $homeCarousel->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_carousel_items(Request $request, HomeCarousel $homeCarousel)
    {

        $nameFile = $this->getNameFileDB($homeCarousel->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_home_carousel');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $homeCarousel->delete();

        return redirect()->back()->with('status_success', 'Item Carousel deleted successfully.');
    }

    /* Section Informative */

    public function form_create_section_informative()
    {
        return view('admin.blog.edit.home.form-create-section-informative');
    }
    public function form_edit_section_informative(Informativehomesection $informativehomesection)
    {
        return view('admin.blog.edit.home.form-section-informative', compact('informativehomesection'));
    }

    public function create_section_informative(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'slogan' => ['required', 'string', 'min:3', 'max:250'],
            'description' => ['required', 'string', 'min:3', 'max:500'],
            'footer' => ['required', 'string', 'min:3', 'max:80'],
            'guide_english' => ['required', 'file', 'max:51200', 'mimes:pdf'],
            'guide_spanish' => ['required', 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $informativehomesection = new Informativehomesection;

        $informativehomesection->title = $request->get('title');
        $informativehomesection->slogan = $request->get('slogan');
        $informativehomesection->description = $request->get('description');
        $informativehomesection->footer = $request->get('footer');

        if ($request->hasFile('guide_english')) {
            $informativehomesection->button_english_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_home_section_informative_pdf'), $request->file('guide_english'), $request->file('file_img'));
        }
        if ($request->hasFile('guide_spanish')) {
            $informativehomesection->button_spanish_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_home_section_informative_pdf'), $request->file('guide_english'), $request->file('file_img'));
        }

        $informativehomesection->save();

        return redirect()->back()->with('status_success', 'Section informative created successfully.');
    }

    public function edit_section_informative(Request $request, Informativehomesection $informativehomesection)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'slogan' => ['required', 'string', 'min:3', 'max:250'],
            'description' => ['required', 'string', 'min:3', 'max:500'],
            'footer' => ['required', 'string', 'min:3', 'max:80'],
            'guide_english' => [Rule::requiredIf($request->hasFile('guide_english')), 'file', 'max:51200', 'mimes:pdf'],
            'guide_spanish' => [Rule::requiredIf($request->hasFile('guide_spanish')), 'file', 'max:51200', 'mimes:pdf'],
        ]);


        if ($request->hasFile('guide_english')) {
            $informativehomesection->button_english_href = $this->appStorageProcess($informativehomesection->button_english_href, config('storage_vivaandaz.url_base_storage_home_section_informative_pdf'), $request->file('guide_english'));
        }

        if ($request->hasFile('guide_spanish')) {
            $informativehomesection->button_spanish_href = $this->appStorageProcess($informativehomesection->button_spanish_href, config('storage_vivaandaz.url_base_storage_home_section_informative_pdf'), $request->file('guide_spanish'));
        }

        $informativehomesection->title = $request->get('title');
        $informativehomesection->slogan = $request->get('slogan');
        $informativehomesection->description = $request->get('description');
        $informativehomesection->footer = $request->get('footer');
        $informativehomesection->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_section_informative(Request $request, Informativehomesection $informativehomesection)
    {

        $nameFile = $this->getNameFileDB($informativehomesection->button_english_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_home_section_informative_pdf');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $nameFile = $this->getNameFileDB($informativehomesection->button_spanish_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_home_section_informative_pdf');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }
        $informativehomesection->delete();

        return redirect()->back()->with('status_success', 'Section informative deleted successfully.');
    }
}
