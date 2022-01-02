<?php

use App\Mealplanindividual;
use Illuminate\Database\Seeder;

class MealplanindividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* -------------------------- A Culinary Journey -------------------------- */

        /* Mealplanindividual::query()->create([
            "text" => "",
            "item_href" => "",
            "fbexperiencecard_id" => "",
        ]); */

        /* -------------------------- Amenities -------------------------- */

        /* Mealplanindividual::query()->create([
            "text" => "",
            "item_href" => "",
            "fbexperiencecard_id" => "",
        ]); */

        /* -------------------------- Upgrade your stay with Food and Beverages -------------------------- */

        Mealplanindividual::query()->create([
            "text" => "All Inclusive Package (English)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/Meal_Plan_Individual/All_Inclusive_Package_eng.pdf"),
            "fbexperiencecard_id" => 3,
        ]);

        Mealplanindividual::query()->create([
            "text" => "All Inclusive Package (Spanish)",
            "item_href" => asset("storage/blog/food_beverage/experiences/pdf/Meal_Plan_Individual/All_Inclusive_Package_esp.pdf"),
            "fbexperiencecard_id" => 3,
        ]);

        /* -------------------------- Private Dinners & Meal Tours -------------------------- */

        /* Mealplanindividual::query()->create([
            "text" => "",
            "item_href" => "",
            "fbexperiencecard_id" => "",
        ]); */
    }
}
