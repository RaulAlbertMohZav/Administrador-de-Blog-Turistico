<?php

namespace App\Http\Controllers\Admin\Edit;

use App\Fbexperiencecard;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ManageFileStorage;
use App\Mealplanindividual;
use App\Moreinfoitem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FbExperiencesEditController extends Controller
{
    use ManageFileStorage;

    public function form_create_fb_experiences()
    {
        return view('admin.blog.edit.experiences.form-create-experiences');
    }
    public function form_edit_fb_experiences(Fbexperiencecard $fbexperiencecard)
    {
        return view('admin.blog.edit.experiences.form-edit-experiences', compact('fbexperiencecard'));
    }

    public function create_fb_experiences(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:70'],
            'description' => ['required', 'string', 'min:3', 'max:800'],
            'file_image' => ['required', 'image', 'max:51200'],
        ]);

        $fbexperiencecard = new Fbexperiencecard;
        $fbexperiencecard->title = $request->get('title');
        $fbexperiencecard->description = $request->get('description');

        if ($request->hasFile('file_image')) {
            $fbexperiencecard->url_image = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_fb_experiences_images'), $request->file('file_image'));
        }

        $fbexperiencecard->save();

        return redirect()->back()->with('status_success', 'Experience created successfully.');
    }
    public function edit_fb_experiences(Request $request, Fbexperiencecard $fbexperiencecard)
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:70'],
            'description' => ['required', 'string', 'min:3', 'max:800'],
            'file_image' => [Rule::requiredIf($request->hasFile('file_image')), 'image', 'max:51200'],
        ]);

        $fbexperiencecard->title = $request->get('title');
        $fbexperiencecard->description = $request->get('description');

        if ($request->hasFile('file_image')) {
            $fbexperiencecard->url_image = $this->appStorageProcess($fbexperiencecard->url_image, config('storage_vivaandaz.url_base_storage_fb_experiences_images'), $request->file('file_image'));
        }

        $fbexperiencecard->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
    public function delete_fb_experiences(Request $request, Fbexperiencecard $fbexperiencecard)
    {

        $nameFile = $this->getNameFileDB($fbexperiencecard->url_image);
        $urlBase = config('storage_vivaandaz.url_base_storage_fb_experiences_images');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        foreach ($fbexperiencecard->mealplanindividuals as $mealplanindividual){

            $nameFile = $this->getNameFileDB($mealplanindividual->item_href);
            $urlBase = config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_meal_plan_individual');

            if ($this->existsFileStorage($urlBase, $nameFile)) {
                $this->deleteFileStorage("{$urlBase}/{$nameFile}");
            }
            $mealplanindividual->delete();
        }
        foreach ($fbexperiencecard->moreinfoitems as $moreinfoitem){

            $nameFile = $this->getNameFileDB($moreinfoitem->item_href);
            $urlBase = config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_more_info');

            if ($this->existsFileStorage($urlBase, $nameFile)) {
                $this->deleteFileStorage("{$urlBase}/{$nameFile}");
            }
            $moreinfoitem->delete();
        }

        $fbexperiencecard->delete();

        return redirect()->back()->with('status_success', 'Experience deleted successfully.');
    }

    /* -------------------------------------------- */


    public function create_fb_experiences_meal_plan_individual(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'file_pdf' => ['required', 'file', 'max:51200', 'mimes:pdf'],
            'experience_id' => ['required', 'integer', 'exists:fbexperiencecards,id'],
        ]);

        $moreInfo = new Mealplanindividual;
        $moreInfo->text = $request->get('text');

        $moreInfo->item_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_meal_plan_individual'), $request->file('file_pdf'));

        $moreInfo->fbexperiencecard_id = $request->get('experience_id');

        $moreInfo->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function edit_fb_experiences_meal_plan_individual(Request $request, Mealplanindividual $mealPlanIndividual)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'experience_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $mealPlanIndividual->text = $request->get('text');
        $mealPlanIndividual->fbexperiencecard_id = $request->get('experience_id');

        if ($request->hasFile('file_pdf')) {
            $mealPlanIndividual->item_href = $this->appStorageProcess($mealPlanIndividual->item_href, config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_meal_plan_individual'), $request->file('file_pdf'));
        }

        $mealPlanIndividual->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_fb_experiences_meal_plan_individual(Request $request, Mealplanindividual $mealPlanIndividual)
    {

        // delete pdf

        $nameFile = $this->getNameFileDB($mealPlanIndividual->item_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_meal_plan_individual');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $mealPlanIndividual->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    /* -------------------------------------------- */


    public function create_fb_experiences_more_info(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'file_pdf' => ['required', 'file', 'max:51200', 'mimes:pdf'],
            'experience_id' => ['required', 'integer', 'exists:fbexperiencecards,id'],
        ]);

        $moreInfo = new Moreinfoitem;
        $moreInfo->text = $request->get('text');

        $moreInfo->item_href = $this->putFileStorage(config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_more_info'), $request->file('file_pdf'));

        $moreInfo->fbexperiencecard_id = $request->get('experience_id');

        $moreInfo->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function edit_fb_experiences_more_info(Request $request, Moreinfoitem $moreInfo)
    {
        $request->validate([
            'text' => ['required', 'string', 'min:3', 'max:150'],
            'experience_id' => ['required', 'integer', 'exists:fbrestaurants,id'],
            'file_pdf' => [Rule::requiredIf($request->hasFile('file_pdf')), 'file', 'max:51200', 'mimes:pdf'],
        ]);

        $moreInfo->text = $request->get('text');
        $moreInfo->fbexperiencecard_id = $request->get('experience_id');

        if ($request->hasFile('file_pdf')) {
            $moreInfo->item_href = $this->appStorageProcess($moreInfo->item_href, config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_more_info'), $request->file('file_pdf'));
        }

        $moreInfo->save();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }

    public function delete_fb_experiences_more_info(Request $request, Moreinfoitem $moreInfo)
    {

        // delete pdf

        $nameFile = $this->getNameFileDB($moreInfo->item_href);
        $urlBase = config('storage_vivaandaz.url_base_storage_fb_experiences_pdf_more_info');

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        $moreInfo->delete();

        return redirect()->back()->with('status_success', 'Configuration saved successfully.');
    }
}
