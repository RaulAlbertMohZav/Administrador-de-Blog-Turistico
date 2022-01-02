<?php

use App\Http\Controllers\Admin\Edit\AppEditController;
use App\Http\Controllers\Admin\Edit\EventsEditController;
use App\Http\Controllers\Admin\Edit\FbExperiencesEditController;
use App\Http\Controllers\Admin\Edit\FbRestaurantsEditController;
use App\Http\Controllers\Admin\Edit\HomeEditController;
use App\Http\Controllers\Admin\Edit\NewsEditController;
use App\Http\Controllers\Admin\Edit\SeeAllProgramsEditController;
use Illuminate\Support\Facades\Route;

Route::post('/edit/app/navigation/{navigation}', [AppEditController::class, 'edit_navigation'])->name('edit.nav');
Route::post('/edit/app/header/{header}', [AppEditController::class, 'edit_header'])->name('edit.header');
Route::post('/edit/app/subheader/{subheader}', [AppEditController::class, 'edit_subheader'])->name('edit.subheader');
Route::post('/edit/app/footer/{footer}', [AppEditController::class, 'edit_footer'])->name('edit.footer');

Route::post('/create/home/carousel-items', [HomeEditController::class, 'create_carousel_items'])->name('create.home.carousel');
Route::post('/edit/home/carousel-items/{homeCarousel}', [HomeEditController::class, 'edit_carousel_items'])->name('edit.home.carousel');
Route::delete('/delete/home/carousel-items/{homeCarousel}', [HomeEditController::class, 'delete_carousel_items'])->name('delete.home.carousel');

Route::post('/create/home/section-informative', [HomeEditController::class, 'create_section_informative'])->name('create.home.section-informative');
Route::post('/edit/home/section-informative/{informativehomesection}', [HomeEditController::class, 'edit_section_informative'])->name('edit.home.section-informative');
Route::delete('/delete/home/section-informative/{informativehomesection}', [HomeEditController::class, 'delete_section_informative'])->name('delete.home.section-informative');

Route::post('/create/activities/see-all-programs/header-content', [SeeAllProgramsEditController::class, 'create_header_content'])->name('create.sp.header-content');
Route::post('/edit/activities/see-all-programs/header-content/{spsectionheader}', [SeeAllProgramsEditController::class, 'edit_header_content'])->name('edit.sp.header-content');
Route::delete('/delete/activities/see-all-programs/header-content/{spsectionheader}', [SeeAllProgramsEditController::class, 'delete_header_content'])->name('delete.sp.header-content');

Route::post('/create/activities/see-all-programs/section-content', [SeeAllProgramsEditController::class, 'create_sp_section_content'])->name('create.sp.content-section');
Route::post('/edit/activities/see-all-programs/section-content/{spsectioncontent}', [SeeAllProgramsEditController::class, 'edit_sp_section_content'])->name('edit.sp.content-section');
Route::delete('/delete/activities/see-all-programs/section-content/{spsectioncontent}', [SeeAllProgramsEditController::class, 'delete_sp_section_content'])->name('delete.sp.content-section');

Route::post('/create/activities/see-all-programs/items-sidebar', [SeeAllProgramsEditController::class, 'create_sp_item_sidebar'])->name('create.sp.items-sidebar');
Route::post('/edit/activities/see-all-programs/items-sidebar/{spsectionsidebarcontent}', [SeeAllProgramsEditController::class, 'edit_sp_item_sidebar'])->name('edit.sp.items-sidebar');
Route::delete('/delete/activities/see-all-programs/items-sidebar/{spsectionsidebarcontent}', [SeeAllProgramsEditController::class, 'delete_sp_item_sidebar'])->name('delete.sp.items-sidebar');

Route::post('/create/activities/see-all-programs/day-trips', [SeeAllProgramsEditController::class, 'create_sp_item_day_trip'])->name('create.sp.day-trips');
Route::post('/edit/activities/see-all-programs/day-trips/{spdaytrips}', [SeeAllProgramsEditController::class, 'edit_sp_item_day_trip'])->name('edit.sp.day-trips');
Route::delete('/delete/activities/see-all-programs/day-trips/{spdaytrips}', [SeeAllProgramsEditController::class, 'delete_sp_item_day_trip'])->name('delete.sp.day-trips');

Route::post('/create/fb/restaurants', [FbRestaurantsEditController::class, 'create_fb_restaurants'])->name('create.fb.restaurants');
Route::post('/edit/fb/restaurants/{fbrestaurant}', [FbRestaurantsEditController::class, 'edit_fb_restaurants'])->name('edit.fb.restaurants');
Route::delete('/delete/fb/restaurants/{fbrestaurant}', [FbRestaurantsEditController::class, 'delete_fb_restaurants'])->name('delete.fb.restaurants');

Route::post('/create/fb/restaurants/hours', [FbRestaurantsEditController::class, 'create_fb_restaurants_hours'])->name('create.fb.restaurants.hours');
Route::post('/edit/fb/restaurants/hours/{hour}', [FbRestaurantsEditController::class, 'edit_fb_restaurants_hours'])->name('edit.fb.restaurants.hours');
Route::post('/delete/fb/restaurants/hours/{hour}', [FbRestaurantsEditController::class, 'delete_fb_restaurants_hours'])->name('delete.fb.restaurants.hours');

Route::post('/create/fb/restaurants/ambiences', [FbRestaurantsEditController::class, 'create_fb_restaurants_ambiences'])->name('create.fb.restaurants.ambiences');
Route::post('/edit/fb/restaurants/ambiences/{ambience}', [FbRestaurantsEditController::class, 'edit_fb_restaurants_ambiences'])->name('edit.fb.restaurants.ambiences');
Route::post('/delete/fb/restaurants/ambiences/{ambience}', [FbRestaurantsEditController::class, 'delete_fb_restaurants_ambiences'])->name('delete.fb.restaurants.ambiences');

Route::post('/create/fb/restaurants/menus', [FbRestaurantsEditController::class, 'create_fb_restaurants_menus'])->name('create.fb.restaurants.menus');
Route::post('/edit/fb/restaurants/menus/{menu}', [FbRestaurantsEditController::class, 'edit_fb_restaurants_menus'])->name('edit.fb.restaurants.menus');
Route::post('/delete/fb/restaurants/menus/{menu}', [FbRestaurantsEditController::class, 'delete_fb_restaurants_menus'])->name('delete.fb.restaurants.menus');


Route::post('/create/fb/experiences', [FbExperiencesEditController::class, 'create_fb_experiences'])->name('create.fb.experiences');
Route::post('/edit/fb/experiences/{fbexperiencecard}', [FbExperiencesEditController::class, 'edit_fb_experiences'])->name('edit.fb.experiences');
Route::delete('/delete/fb/experiences/{fbexperiencecard}', [FbExperiencesEditController::class, 'delete_fb_experiences'])->name('delete.fb.experiences');

Route::post('/create/fb/experiences/more-info', [FbExperiencesEditController::class, 'create_fb_experiences_more_info'])->name('create.fb.experiences.more-info');
Route::post('/edit/fb/experiences/more-info/{moreInfo}', [FbExperiencesEditController::class, 'edit_fb_experiences_more_info'])->name('edit.fb.experiences.more-info');
Route::post('/delete/fb/experiences/more-info/{moreInfo}', [FbExperiencesEditController::class, 'delete_fb_experiences_more_info'])->name('delete.fb.experiences.more-info');

Route::post('/create/fb/experiences/meal-plan-individual', [FbExperiencesEditController::class, 'create_fb_experiences_meal_plan_individual'])->name('create.fb.experiences.meal-plan-individual');
Route::post('/edit/fb/experiences/meal-plan-individual/{mealPlanIndividual}', [FbExperiencesEditController::class, 'edit_fb_experiences_meal_plan_individual'])->name('edit.fb.experiences.meal-plan-individual');
Route::post('/delete/fb/experiences/meal-plan-individual/{mealPlanIndividual}', [FbExperiencesEditController::class, 'delete_fb_experiences_meal_plan_individual'])->name('delete.fb.experiences.meal-plan-individual');


Route::post('/create/events/section-event', [EventsEditController::class, 'create_events'])->name('create.events');
Route::post('/edit/events/section-event/{event}', [EventsEditController::class, 'edit_events'])->name('edit.events');
Route::delete('/delete/events/section-event/{event}', [EventsEditController::class, 'delete_events'])->name('delete.events');

Route::post('/create/news/section-notice', [NewsEditController::class, 'create_news'])->name('create.notices');
Route::post('/edit/news/section-notice/{notice}', [NewsEditController::class, 'edit_news'])->name('edit.notices');
Route::delete('/delete/news/section-notice/{notice}', [NewsEditController::class, 'delete_news'])->name('delete.notices');
