<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Fbrestaurant;
use App\Fbrestaurantambience;
use App\Fbrestauranthour;
use App\Fbrestaurantmenu;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ManageFileStorage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FbRestaurantsEditController extends Controller
{
    use ManageFileStorage;
    public function form_create_fb_restaurants()
    {
        return view('admin.blog.edit.restaurants.form-create-restaurants');
    }
    public function form_edit_fb_restaurants(Fbrestaurant $fbrestaurant)
    {
        $restaurantsHours = $fbrestaurant->fbrestauranthours;
        $restaurantsAmbiences = $fbrestaurant->fbrestaurantambiences;
        $restaurantsMenus = $fbrestaurant->fbrestaurantmenus;

        return view('admin.blog.edit.restaurants.form-edit-restaurants', compact(
            'fbrestaurant',
            "restaurantsHours",
            "restaurantsAmbiences",
            "restaurantsMenus"
        ));
    }

    public function create_fb_restaurants(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:70'],
            'description' => ['required', 'string', 'min:3', 'max:800'],
            'file_image' => ['required', 'image', 'max:51200'],
        ]);

        $fbrestaurant = new Fbrestaurant;
        $fbrestaurant->title = $request->get('title');
        $fbrestaurant->description = $request->get('description');

        if ($request->hasFile('file_image')) {
            $fbrestaurant->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_fb_restaurants_images'), $request->file('file_image'));
        }

        $fbrestaurant->save();

        return redirect()->back()->with('status_success', 'Restaurant created successfully.');
    }
    public function edit_fb_restaurants(Request $request, Fbrestaurant $fbrestaurant)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:70'],
            'description' => ['required', 'string', 'min:3', 'max:800'],
            'file_image' => [Rule::requiredIf($request->hasFile('file_image')), 'image', 'max:51200'],
        ]);

        $fbrestaurant->title = $request->get('title');
        $fbrestaurant->description = $request->get('description');

        if ($request->hasFile('file_image')) {
            $fbrestaurant->url_image = $this->appStorageProcess($fbrestaurant->url_image, config('storage_vivaandaz.url_base_storage_fb_restaurants_images'), $request->file('file_image'));
        }

        $fbrestaurant->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_fb_restaurants(Request $request, Fbrestaurant $fbrestaurant)
    {

        $nameFile = $this->getNameFileDB($fbrestaurant->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_fb_restaurants_images');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        /*Eliminar Ambiences*/
        foreach ($fbrestaurant->fbrestaurantambiences as $ambience){
            $ambience->delete();
        }
        /*Eliminar Hours*/
        foreach ($fbrestaurant->fbrestauranthours as $hour){
            $hour->delete();
        }
        /*Eliminar Menus*/
        foreach ($fbrestaurant->fbrestaurantmenus as $menu){

            $nameFile = $this->getNameFileDB($menu->url_pdf);
            $urlBase = config('storage_vivaandaz.url_base_storage_fb_restaurants_pdf_menus');

            if ($this->existsFileStorage($urlBase, $nameFile)) {
                $this->deleteFileStorage("{$urlBase}/{$nameFile}");
            }
            $menu->delete();
        }

        $fbrestaurant->delete();

        return redirect()->back()->with('status_success', 'Restaurant deleted successfully.');
    }
    /* -------------------------------------------- */

    public function create_fb_restaurants_hours(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
        ]);

        $hour = new Fbrestauranthour;
        $hour->text = $request->get('text');
        $hour->fbrestaurant_id = $request->get('restaurant_id');

        $hour->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function edit_fb_restaurants_hours(Request $request, Fbrestauranthour $hour)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
        ]);

        $hour->text = $request->get('text');
        $hour->fbrestaurant_id = $request->get('restaurant_id');

        $hour->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_fb_restaurants_hours(Request $request, Fbrestauranthour $hour)
    {
        $hour->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    /* -------------------------------------------- */


    public function create_fb_restaurants_ambiences(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
        ]);

        $ambience = new Fbrestaurantambience;
        $ambience->text = $request->get('text');
        $ambience->fbrestaurant_id = $request->get('restaurant_id');

        $ambience->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function edit_fb_restaurants_ambiences(Request $request, Fbrestaurantambience $ambience)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
        ]);

        $ambience->text = $request->get('text');
        $ambience->fbrestaurant_id = $request->get('restaurant_id');

        $ambience->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_fb_restaurants_ambiences(Request $request, Fbrestaurantambience $ambience)
    {
        $ambience->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    /* -------------------------------------------- */


    public function create_fb_restaurants_menus(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'file_pdf' => ['required', 'file', 'max:51200', 'mimes:pdf'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
        ]);

        $menu = new Fbrestaurantmenu;
        $menu->text = $request->get('text');

        $menu->url_pdf = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_fb_restaurants_pdf_menus'), $request->file('file_pdf'));

        $menu->fbrestaurant_id = $request->get('restaurant_id');

        $menu->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function edit_fb_restaurants_menus(Request $request, Fbrestaurantmenu $menu)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'restaurant_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $menu->text = $request->get('text');
        $menu->fbrestaurant_id = $request->get('restaurant_id');

        if ($request->hasFile('file_pdf')) {
            $menu->url_pdf = $this->appStorageProcess($menu->url_pdf, config('storage_vivaandaz.url_base_storage_fb_restaurants_pdf_menus'), $request->file('file_pdf'));
        }

        $menu->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_fb_restaurants_menus(Request $request, Fbrestaurantmenu $menu)
    {

        // delete pdf

        $nameFile = $this->getNameFileDB($menu->url_pdf);
        $urlBase = config('storage_vivaandaz.url_base_storage_fb_restaurants_pdf_menus');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $menu->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
}
