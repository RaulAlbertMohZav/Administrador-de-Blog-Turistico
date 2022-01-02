<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ManageFileStorage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventsEditController extends Controller
{
    use ManageFileStorage;

    public function form_create_events()
    {
        return view('admin.blog.edit.events.form-create-events');
    }

    public function form_edit_events(Event $event)
    {
        return view('admin.blog.edit.events.form-edit-events', compact('event'));
    }

    public function create_events(Request $request)
    {

        $request->validate([
            'title' => ['required', 'min:3', 'max:25'],
            'description' => ['required', 'min:3', 'max:700'],
            'footer' => ['required', 'min:3', 'max:255'],
            'btn_text' => ['required', 'min:3', 'max:255'],
            'file_pdf' => ['required', 'file', 'max:51200', 'mimes:pdf'],
            'image' => ['required', 'image', 'max:51200'],
        ]);
        $event = new Event;
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->footer = $request->get('footer');
        $event->btn_text = $request->get('btn_text');
        $event->btn_show = true;

        if ($request->hasFile('image')) {
            $event->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_events_images'), $request->file('image'));
        }

        if ($request->hasFile('file_pdf')) {
            $event->btn_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_events_pdf'), $request->file('file_pdf'));
        }

        $event->save();

        return redirect()->back()->with('status_success', 'Event created successfully.');
    }
    public function edit_events(Request $request, Event $event)
    {

        $request->validate([
            'title' => ['required', 'min:3', 'max:25'],
            'description' => ['required', 'min:3', 'max:700'],
            'footer' => ['required', 'min:3', 'max:255'],
            'btn_text' => ['required', 'min:3', 'max:255'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
            'image' => [Rule::requiredIf($request->hasFile('image')), 'image', 'max:51200'],
        ]);

        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->footer = $request->get('footer');
        $event->btn_text = $request->get('btn_text');
        if ($request->hasFile('file_pdf')) {
            $event->btn_href = $this->appStorageProcess($event->btn_href, config('storage_vivaandaz.url_base_storage_events_pdf'), $request->file('file_pdf'));
        }
        if ($request->hasFile('image')) {
            $event->url_image = $this->appStorageProcess($event->url_image, config('storage_vivaandaz.url_base_storage_events_images'), $request->file('image'));
        }
        $event->save();
        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_events(Request $request, Event $event)
    {

        $nameFile = $this->getNameFileDB($event->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_events_images');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $nameFile = $this->getNameFileDB($event->btn_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_events_pdf');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $event->delete();
        return redirect()->back()->with('status_success', 'Event deleted successfully.');
    }
}
