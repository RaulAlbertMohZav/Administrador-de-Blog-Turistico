<?php

use App\Http\Controllers\Blog\EventsBlogController;
use App\Http\Controllers\Blog\FbExperienciesController;
use App\Http\Controllers\Blog\FbRestaurantsController;
use App\Http\Controllers\Blog\HomeBlogController;
use App\Http\Controllers\Blog\NewsBlogController;
use App\Http\Controllers\Blog\SeeAllProgramsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;


Route::get('/', [HomeBlogController::class, 'index'])->name('home-blog');

Route::get('/see-all-programs', [SeeAllProgramsController::class, 'index'])->name('see-all-programs');

Route::get('/restaurants', [FbRestaurantsController::class, 'index'])->name('restaurants');

Route::get('/f&b-experience', [FbExperienciesController::class, 'index'])->name('f&b-experience');

Route::get('/events', [EventsBlogController::class, 'index'])->name('events');

Route::get('/news', [NewsBlogController::class, 'index'])->name('news');

Route::prefix('admin')->group(function () {
    Auth::routes([
        'register' => false,
        'verify' => true
    ]);
});
Route::prefix('admin/viva-andaz')->middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UsersController::class);
    Route::get('auth/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('auth.profile');
    Route::post('auth/profile/change-password', [\App\Http\Controllers\ProfileController::class, 'change_password'])->name('auth.profile.change-password');

    Route::get('view/blog/home', [\App\Http\Controllers\Admin\View\HomeAdminBlogController::class, 'index'])->name('admin.view.home');

    Route::get('view/blog/see-all-programs', [\App\Http\Controllers\Admin\View\SeeAllProgramAdminBlogController::class, 'index'])->name('admin.view.see-all-programs');
    Route::get('view/blog/fb-restaurants', [\App\Http\Controllers\Admin\View\FbRestaurantsAdminBlogController::class, 'index'])->name('admin.view.fb-restaurants');
    Route::get('view/blog/fb-experiences', [\App\Http\Controllers\Admin\View\FbExperiencesAdminBlogController::class, 'index'])->name('admin.view.fb-experiences');
    Route::get('view/blog/events', [\App\Http\Controllers\Admin\View\EventsAdminBlogController::class, 'index'])->name('admin.view.events');
    Route::get('view/blog/news', [\App\Http\Controllers\Admin\View\NewsAdminBlogController::class, 'index'])->name('admin.view.news');

    require __DIR__ . '/Admin/forms.php';
});
