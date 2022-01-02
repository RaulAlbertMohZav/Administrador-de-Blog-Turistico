<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Footer;
use App\Header;
use App\Http\Controllers\Traits\ManageFileStorage;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\Subheader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AppEditController extends Controller
{
    use ManageFileStorage;

    public function form_edit_nav(Navigation $navigation)
    {
        $existsPDF = $this->existsFileStorage(config('storage_vivaandaz.url_base_storage_navigation'), $this->getNameFileDB($navigation->item_href));
        return view('admin.blog.edit.app.form-navigation', compact('navigation', 'existsPDF'));
    }

    public function edit_navigation(Request $request, Navigation $navigation)
    {

        $data = $request->validate([
            'link_text' => ['required', 'min:3', 'max:30'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf']
        ]);

        $navigation->text = $data['link_text'];

        if ($request->hasFile('file_pdf')) {
            $navigation->item_href = $this->appStorageProcess($navigation->item_href, config('storage_vivaandaz.url_base_storage_navigation'), $request->file('file_pdf'));
        }

        $navigation->save();


        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function form_edit_header(Header $header)
    {
        return view('admin.blog.edit.app.form-header', compact('header'));
    }

    public function edit_header(Request $request, Header $header)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:4', 'max:20']
        ]);

        $header->title = $data['title'];
        $header->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function form_edit_subheader(Subheader $subheader)
    {
        return view('admin.blog.edit.app.form-subheader', compact('subheader'));
    }


    public function edit_subheader(Request $request, Subheader $subheader)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:40'],
            'description' => ['required', 'string', 'min:10', 'max:400'],
        ]);

        $subheader->title = $data['title'];
        $subheader->description = $data['description'];
        $subheader->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function form_edit_footer(Footer $footer)
    {
        return view('admin.blog.edit.app.form-footer', compact('footer'));
    }

    public function edit_footer(Request $request, Footer $footer)
    {
        $data = $request->validate([
            'slogan' => ['required', 'string', 'min:3', 'max:15'],
            'author' => ['required', 'string', 'min:10', 'max:35'],
            'btn_facebook_href' => [Rule::requiredIf($request->get('btn_facebook_href') != null)],
            'btn_instragram_href' => [Rule::requiredIf($request->get('btn_instragram_href') != null)],
            'btn_pinterest_href' => [Rule::requiredIf($request->get('btn_pinterest_href') != null)],
        ]);

        if ($request->get('btn_facebook_href')) {
            $request->validate([
                'btn_facebook_href' => ['string', 'url'],
            ]);
        }

        if ($request->get('btn_instragram_href')) {
            $request->validate([
                'btn_instragram_href' => ['string', 'url'],
            ]);
        }

        if ($request->get('btn_pinterest_href')) {
            $request->validate([
                'btn_pinterest_href' => ['string', 'url'],
            ]);
        }

        $footer->slogan = $data['slogan'];
        $footer->author = $data['author'];
        $footer->btn_facebook_href = $request->get('btn_facebook_href') ?? $footer->btn_facebook_href;
        $footer->btn_instagram_href = $request->get('btn_instragram_href') ?? $footer->btn_instagram_href;
        $footer->btn_pinterest_href = $request->get('btn_pinterest_href') ?? $footer->btn_pinterest_href;
        $footer->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
}
