<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ManageFileStorage;
use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NewsEditController extends Controller
{
    use ManageFileStorage;

    public function form_create_news()
    {
        return view('admin.blog.edit.news.form-create-news');
    }
    public function form_edit_news(Notice $notice)
    {
        return view('admin.blog.edit.news.form-edit-news', compact('notice'));
    }

    public function create_news(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:150'],
            'description' => ['required', 'min:3', 'max:800'],
            'file_video' => ['required', 'mimetypes:video/*'],
        ]);

        $notice = new Notice;
        $notice->title = $request->get('title');
        $notice->description = $request->get('description');

        if ($request->hasFile('file_video')) {
            $notice->url_video = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_news_vide'), $request->file('file_video'));
        }

        $notice->save();
        return redirect()->back()->with('status_success', 'Notice created successfully.');
    }
    public function edit_news(Request $request, Notice $notice)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:150'],
            'description' => ['required', 'min:3', 'max:800'],
            'file_video' => [Rule::requiredIf($request->hasFile('file_video')), 'mimetypes:video/*'],
        ]);

        $notice->title = $request->get('title');
        $notice->description = $request->get('description');

        if ($request->hasFile('file_video')) {
            $notice->url_video = $this->appStorageProcess($notice->url_video, config('storage_vivaandaz.url_base_storage_news_video'), $request->file('file_video'));
        }

        $notice->save();
        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_news(Request $request, Notice $notice)
    {

        $nameFile = $this->getNameFileDB($notice->url_video);
        $urlBase = config('storage_vivaandaz.url_base_storage_news_video');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $notice->delete();
        return redirect()->back()->with('status_success', 'Notice deleted successfully.');
    }
}
