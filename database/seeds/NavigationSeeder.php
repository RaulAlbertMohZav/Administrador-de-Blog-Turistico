<?php

use Illuminate\Database\Seeder;
use App\Navigation;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigation::query()->create([
            "group" => "Home",
            "text" => "Home",
            "item_href" => route('home-blog'),
        ]);

        Navigation::query()->create([
            "group" => "Activities",
            "text" => "Activities Calendar",
            "item_href" => asset('storage/blog/app/navigation/Activities_Program_Agosto_W1.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Activities",
            "text" => "See All Programs",
            "item_href" => route('see-all-programs'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge",
            "text" => "Andaz Mayakoba Map",
            "item_href" => asset('storage/blog/app/navigation/Andaz_Mayakoba_Map.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge",
            "text" => "Mayakoba Map",
            "item_href" => asset('storage/blog/app/navigation/mayakoba-map.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge.In Room Directory",
            "text" => "English",
            "item_href" => asset('storage/blog/app/navigation/CUNAM-In-Room-Directory-EN.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge.In Room Directory",
            "text" => "Spanish",
            "item_href" => asset('storage/blog/app/navigation/CUNAM-In-Room-Directory-ES.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge.Covid-19-Testing",
            "text" => "English",
            "item_href" => asset('storage/blog/app/navigation/COVID-19Testing_ENG.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge.Covid-19-Testing",
            "text" => "Spanish",
            "item_href" => asset('storage/blog/app/navigation/COVID-19Testing_ESP.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge",
            "text" => "Pet Policy",
            "item_href" => asset('storage/blog/app/navigation/Pet_Policy_Andaz.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge",
            "text" => "Add-On-Packages",
            "item_href" => asset('storage/blog/app/navigation/add_on_packages_2021.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Concierge",
            "text" => "Special Ballon Decoration",
            "item_href" => asset('storage/blog/app/navigation/special_balloon_decoration.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage",
            "text" => "Restaurants",
            "item_href" => route('restaurants'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage",
            "text" => "F&B Experiences",
            "item_href" => route('f&b-experience'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage.Meal Plans.Groups",
            "text" => "Open Kitchen Package (English)",
            "item_href" => asset('storage/blog/app/navigation/Open_Kitchen_Pkg_for_Groups_2020_2021-Eng.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage.Meal Plans.Groups",
            "text" => "Open Kitchen Package (Spanish)",
            "item_href" => asset('storage/blog/app/navigation/Open_Kitchen_Pkg_for_Groups_2020_2021-Esp.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage.Meal Plans.Individual",
            "text" => "All Inclusive Package (English)",
            "item_href" => asset('storage/blog/app/navigation/All_Inclusive_Package_eng_ago21.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Food and Beverage.Meal Plans.Individual",
            "text" => "All Inclusive Package (Spanish)",
            "item_href" => asset('storage/blog/app/navigation/All_Inclusive_Package_esp_ago21.pdf'),
        ]);

        Navigation::query()->create([
            "group" => "Events",
            "text" => "Events",
            "item_href" => route('events'),
        ]);

        Navigation::query()->create([
            "group" => "News",
            "text" => "News",
            "item_href" => route('news'),
        ]);
    }
}
