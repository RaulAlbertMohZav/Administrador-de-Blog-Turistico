<?php

use App\Http\Controllers\Admin\Edit\AppEditController;
use App\Http\Controllers\Admin\Edit\EventsEditController;
use App\Http\Controllers\Admin\Edit\FbExperiencesEditController;
use App\Http\Controllers\Admin\Edit\FbRestaurantsEditController;
use App\Http\Controllers\Admin\Edit\HomeEditController;
use App\Http\Controllers\Admin\Edit\NewsEditController;
use App\Http\Controllers\Admin\Edit\SeeAllProgramsEditController;
use Illuminate\Support\Facades\Route;


Route::get('/form/edit/app/navigation/{navigation}', [AppEditController::class, 'form_edit_nav'])->name('form.edit.nav');
Route::get('/form/edit/app/header/{header}', [AppEditController::class, 'form_edit_header'])->name('form.edit.header');
Route::get('/form/edit/app/subheader/{subheader}', [AppEditController::class, 'form_edit_subheader'])->name('form.edit.subheader');
Route::get('/form/edit/app/footer/{footer}', [AppEditController::class, 'form_edit_footer'])->name('form.edit.footer');

/* Home */
Route::get('/form/create/home/cards-carousels', [HomeEditController::class, 'form_create_cards_carousel'])->name('form.create.home.cards-carousel');
Route::get('/form/edit/home/cards-carousels/{homeCarousel}', [HomeEditController::class, 'form_edit_cards_carousel'])->name('form.edit.home.cards-carousel');
Route::get('/form/create/home/section-informative', [HomeEditController::class, 'form_create_section_informative'])->name('form.create.home.section-informative');
Route::get('/form/edit/home/section-informative/{informativehomesection}', [HomeEditController::class, 'form_edit_section_informative'])->name('form.edit.home.section-informative');

Route::get('/form/edit/activities/see-all-programs/header-content/{spsectionheader}', [SeeAllProgramsEditController::class, 'form_edit_sp_header_content'])->name('form.edit.sp.section-header-content');
Route::get('/form/create/activities/see-all-programs/section-content', [SeeAllProgramsEditController::class, 'form_create_sp_section_content'])->name('form.create.sp.section-content');
Route::get('/form/edit/activities/see-all-programs/section-content/{spsectioncontent}', [SeeAllProgramsEditController::class, 'form_edit_sp_section_content'])->name('form.edit.sp.section-content');
Route::get('/form/create/activities/see-all-programs/items-sidebar', [SeeAllProgramsEditController::class, 'form_create_sp_items_sidebar'])->name('form.create.sp.items-sidebar');
Route::get('/form/edit/activities/see-all-programs/items-sidebar/{spsectionsidebarcontent}', [SeeAllProgramsEditController::class, 'form_edit_sp_items_sidebar'])->name('form.edit.sp.items-sidebar');
Route::get('/form/create/activities/see-all-programs/items-day-trips', [SeeAllProgramsEditController::class, 'form_create_sp_item_day_trip'])->name('form.create.sp.items-day-trips');
Route::get('/form/edit/activities/see-all-programs/items-day-trips/{spdaytrips}', [SeeAllProgramsEditController::class, 'form_edit_sp_item_day_trip'])->name('form.edit.sp.items-day-trips');

Route::get('/form/create/fb/restaurants', [FbRestaurantsEditController::class, 'form_create_fb_restaurants'])->name('form.create.fb.restaurants');
Route::get('/form/edit/fb/restaurants/{fbrestaurant}', [FbRestaurantsEditController::class, 'form_edit_fb_restaurants'])->name('form.edit.fb.restaurants');
Route::get('/form/create/fb/experiences', [FbExperiencesEditController::class, 'form_create_fb_experiences'])->name('form.create.fb.experiences');
Route::get('/form/edit/fb/experiences/{fbexperiencecard}', [FbExperiencesEditController::class, 'form_edit_fb_experiences'])->name('form.edit.fb.experiences');

Route::get('/form/create/events', [EventsEditController::class, 'form_create_events'])->name('form.create.events');
Route::get('/form/edit/events/{event}', [EventsEditController::class, 'form_edit_events'])->name('form.edit.events');
Route::get('/form/create/news/{notice}', [NewsEditController::class, 'form_create_news'])->name('form.create.news');
Route::get('/form/edit/news/{notice}', [NewsEditController::class, 'form_edit_news'])->name('form.edit.news');

require __DIR__ . '/functions.php';
