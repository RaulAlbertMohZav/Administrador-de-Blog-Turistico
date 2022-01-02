<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(NavigationSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(SubheaderSeeder::class);
        /* home */
        $this->call(HomeCarouselSeeder::class);
        $this->call(InformativehomesectionSeeder::class);
        /* activities */
        $this->call(ListoptionssectionhomeSeeder::class);
        $this->call(SpsectionheaderSeeder::class);
        $this->call(SpsectioncontentSeeder::class);
        $this->call(SpoptionssectioncontentactivitieSeeder::class);
        $this->call(SpsectionsidebarcontentSeeder::class);
        $this->call(SpdaytripsSeeder::class);
        /* fb - restaurants */
        $this->call(FbrestaurantSeeder::class);
        $this->call(FbrestauranthourSeeder::class);
        $this->call(FbrestaurantambienceSeeder::class);
        $this->call(FbrestaurantmenuSeeder::class);
        /* fb - experiencies */
        $this->call(FbexperiencecardSeeder::class);
        $this->call(MoreinfoitemSeeder::class);
        $this->call(MealplanindividualSeeder::class);
        /* events */
        $this->call(EventSeeder::class);
        /* news */
        $this->call(NoticeSeeder::class);
    }
}
