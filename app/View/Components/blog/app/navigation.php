<?php

namespace App\View\Components\blog\app;

use Illuminate\View\Component;

class navigation extends Component
{

    /* public $home;

    public $activities_Calendar;
    public $activities_SeeAllPrograms;

    public $concierge_AndazMayakobaMap;
    public $concierge_MayakobaMap;
    public $concierge_InRoomDirectory_English;
    public $concierge_InRoomDirectory_Spanish;
    public $concierge_CovidTesting_English;
    public $concierge_CovidTesting_Spanish;
    public $concierge_PetPolicy;
    public $concierge_AddOnPackages;
    public $concierge_SpecialBalloonDecoration;

    public $fb_restaurants;
    public $fb_experiences;
    public $fb_mealPlan_Group_Spanish;
    public $fb_mealPlan_Group_English;
    public $fb_mealPlan_Individual_Spanish;
    public $fb_mealPlan_Individual_English;

    public $events;
    public $news; */

    public $navigationLinks;
    public $isAdmin;
    public function __construct(
        $navigationLinks,
        $isAdmin = false
        /* $home, $activitiesSeeAllPrograms, $activitiesCalendar,
        $conciergeAndazMayakobaMap, $conciergeMayakobaMap, $conciergeInRoomDirectoryEnglish, $conciergeInRoomDirectorySpanish,
        $conciergeCovidTestingEnglish, $conciergeCovidTestingSpanish, $conciergePetPolicy, $conciergeAddOnPackages, $conciergeSpecialBalloonDecoration,
        $fbRestaurants, $fbExperiences, $fbMealPlanGroupSpanish, $fbMealPlanGroupEnglish, $fbMealPlanIndividualSpanish, $fbMealPlanIndividualEnglish, $events, $news */
    ) {
        $this->navigationLinks = $navigationLinks;
        $this->isAdmin = $isAdmin;
        /* $this->home = $home;
        $this->activities_Calendar = $activitiesSeeAllPrograms;
        $this->activities_SeeAllPrograms = $activitiesCalendar;
        $this->concierge_AndazMayakobaMap = $conciergeAndazMayakobaMap;
        $this->concierge_MayakobaMap = $conciergeMayakobaMap;
        $this->concierge_InRoomDirectory_English = $conciergeInRoomDirectoryEnglish;
        $this->concierge_InRoomDirectory_Spanish = $conciergeInRoomDirectorySpanish;
        $this->concierge_CovidTesting_English = $conciergeCovidTestingEnglish;
        $this->concierge_CovidTesting_Spanish = $conciergeCovidTestingSpanish;
        $this->concierge_PetPolicy = $conciergePetPolicy;
        $this->concierge_AddOnPackages = $conciergeAddOnPackages;
        $this->concierge_SpecialBalloonDecoration = $conciergeSpecialBalloonDecoration;
        $this->fb_restaurants = $fbRestaurants;
        $this->fb_experiences = $fbExperiences;
        $this->fb_mealPlan_Group_Spanish = $fbMealPlanGroupSpanish;
        $this->fb_mealPlan_Group_English = $fbMealPlanGroupEnglish;
        $this->fb_mealPlan_Individual_Spanish = $fbMealPlanIndividualSpanish;
        $this->fb_mealPlan_Individual_English = $fbMealPlanIndividualEnglish;
        $this->events = $events;
        $this->news = $news; */
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.app.navigation');
    }
}
