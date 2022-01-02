<?php

namespace App\Providers;

use App\View\Components\admin\blog\home\pencilEditFooter;
use App\View\Components\admin\blog\home\pencilEditHeader;
use App\View\Components\admin\blog\home\pencilEditSubheader;
use App\View\Components\admin\blog\home\pencilForEditNavigation;
use App\View\Components\admin\blog\layout\navigationAdminForms;
use App\View\Components\admin\header;
use App\View\Components\admin\menu;
use App\View\Components\blog\activities\headerContent;
use App\View\Components\blog\activities\SpItemDayTrips;
use App\View\Components\blog\activities\spItemsSidebar;
use App\View\Components\blog\activities\SpSectionContentAct;
use App\View\Components\blog\app\footer;
use App\View\Components\blog\app\header as AppHeader;
use App\View\Components\LoginCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
/* Blog Componentes View */
use App\View\Components\blog\app\navigation;
use App\View\Components\blog\app\subheader;
use App\View\Components\blog\events\eventItem;
use App\View\Components\blog\fb_experience\FbexperienceItem;
use App\View\Components\blog\fb_restaurants\restaurantItem;
use App\View\Components\blog\home\carouselCardsHome;
use App\View\Components\blog\home\sectionInformative;
use App\View\Components\blog\news\noticeItem;

class RegisterComponentsBladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*Admin*/
        Blade::component('login-card', LoginCard::class);
        Blade::component('menu-admin', menu::class);
        Blade::component('header-admin', header::class);

        /*Blog*/
        Blade::component('navigation-vivaandaz', navigation::class);
        Blade::component('header-vivaandaz', AppHeader::class);
        Blade::component('subheader-vivaandaz', subheader::class);
        Blade::component('footer-vivaandaz', footer::class);

        Blade::component('section-informative-home', sectionInformative::class);
        Blade::component('carousel-cards-home', carouselCardsHome::class);
        Blade::component('header-content-see-all-programs', headerContent::class);
        Blade::component('section-content-activity-see-all-programs', SpSectionContentAct::class);
        Blade::component('item-sidebar-activity-see-all-programs', spItemsSidebar::class);
        Blade::component('day-trips-sidebar-activity-see-all-programs', SpItemDayTrips::class);

        Blade::component('item-restaurant-fb', restaurantItem::class);

        Blade::component('item-experience-fb', FbexperienceItem::class);

        Blade::component('event-item', eventItem::class);

        Blade::component('notice-item', noticeItem::class);


        /* Components for redirect forms edit */
        Blade::component('pencil-edit-nav', pencilForEditNavigation::class);
        Blade::component('pencil-edit-header', pencilEditHeader::class);
        Blade::component('pencil-edit-subheader', pencilEditSubheader::class);
        Blade::component('pencil-edit-footer', pencilEditFooter::class);

        Blade::component('navigation-edit-layout', navigationAdminForms::class);
    }
}
