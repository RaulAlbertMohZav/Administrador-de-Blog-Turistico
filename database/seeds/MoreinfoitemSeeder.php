<?php

use App\Moreinfoitem;
use Illuminate\Database\Seeder;

class MoreinfoitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* -------------------------- A Culinary Journey -------------------------- */
        Moreinfoitem::query()->create([
            "text" => "A Culinary Journey in English",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/A_Culinary_Journey-ENG.pdf"),
            "fbexperiencecard_id" => 1,
        ]);

        Moreinfoitem::query()->create([
            "text" => "A Culinary Journey in Spanish",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/A_Culinary_Journey-ESP.pdf"),
            "fbexperiencecard_id" => 1,
        ]);


        /* -------------------------- Amenities -------------------------- */
        Moreinfoitem::query()->create([
            "text" => "View Amenities Catalogue",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/brochure_amenities_fb.pdf"),
            "fbexperiencecard_id" => 2,
        ]);


        /* -------------------------- Upgrade your stay with Food and Beverages -------------------------- */
        /* Moreinfoitem::query()->create([
            "text" => "All Inclusive Package (English)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/.pdf"),
            "fbexperiencecard_id" => 3,
        ]); */

        /* -------------------------- Private Dinners & Meal Tours -------------------------- */
        Moreinfoitem::query()->create([
            "text" => "Private Dinners (English)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/Private_Dinners-Eng.pdf"),
            "fbexperiencecard_id" => 4,
        ]);

        Moreinfoitem::query()->create([
            "text" => "Boat Experience (English)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/Boat_Experiences-Eng.pdf"),
            "fbexperiencecard_id" => 4,
        ]);

        Moreinfoitem::query()->create([
            "text" => "Boat Experience (Spanish)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/More_Info/Boat_Experiences-Esp.pdf"),
            "fbexperiencecard_id" => 4,
        ]);
    }
}
