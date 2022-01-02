<?php

use App\Fbrestaurantmenu;
use Illuminate\Database\Seeder;

class FbrestaurantmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* ------------------------------------------------------- "Casa Amate" ------------------------------------------------------- */

        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Dinner-ENG.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Dinner-ESP.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 3 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dessert",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Dessert.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 4 */
        Fbrestaurantmenu::query()->create([
            "text" => "Kids",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Kids_Menu.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 5 */
        Fbrestaurantmenu::query()->create([
            "text" => "Beverages",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Beverages.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 6 */
        Fbrestaurantmenu::query()->create([
            "text" => "Wine",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Wine.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 7 */
        Fbrestaurantmenu::query()->create([
            "text" => "Sunday Brunch (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Sunday_Brunch-Eng.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* 8 */
        Fbrestaurantmenu::query()->create([
            "text" => "Sunday Brunch (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Casa_Amate_Sunday_Brunch-Esp.pdf"),
            "fbrestaurant_id" => 1,
        ]);

        /* ------------------------------------------------------- "Cocina Milagro" ------------------------------------------------------- */
        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "Breakfast",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Breakfast.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "Lunch (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Lunch-Eng.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 3 */
        Fbrestaurantmenu::query()->create([
            "text" => "Lunch (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Lunch-Esp.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 4 */
        Fbrestaurantmenu::query()->create([
            "text" => "Lunch Desserts",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Lunch_Desserts.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 5 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Dinner-Eng.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 6 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Dinner_Esp.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 7 */
        Fbrestaurantmenu::query()->create([
            "text" => "Kids",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro-Kids.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* 8 */
        Fbrestaurantmenu::query()->create([
            "text" => "Beverages",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Cocina_Milagro_Beverages.pdf"),
            "fbrestaurant_id" => 2,
        ]);

        /* ------------------------------------------------------- "Tinta del Pulpo" ------------------------------------------------------- */
        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "Breakfast",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_Breakfast.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "Lunch",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_Lunch.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* 3 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_Dinner.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* 4 */
        Fbrestaurantmenu::query()->create([
            "text" => "Beverages",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_Beverages.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* 5 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dessert",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_dessert.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* 6 */
        Fbrestaurantmenu::query()->create([
            "text" => "Kids",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Tinta_del_Pulpo_kids.pdf"),
            "fbrestaurant_id" => 3,
        ]);

        /* ------------------------------------------------------- "Sotavento" ------------------------------------------------------- */
        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "Beach Lunch (English/Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Sotavento_Beach_Lunch.pdf"),
            "fbrestaurant_id" => 4,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Sotavento_Dinner_Eng.pdf"),
            "fbrestaurant_id" => 4,
        ]);

        /* 3 */
        Fbrestaurantmenu::query()->create([
            "text" => "Dinner (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Sotavento_Dinner_Esp.pdf"),
            "fbrestaurant_id" => 4,
        ]);

        /* 4 */
        Fbrestaurantmenu::query()->create([
            "text" => "Beverages",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Sotavento_Beverages.pdf"),
            "fbrestaurant_id" => 4,
        ]);

        /* ------------------------------------------------------- "Vegan Bar" ------------------------------------------------------- */
        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "VB Menu (English)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Vegan_Bar_Eng.pdf"),
            "fbrestaurant_id" => 5,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "VB Menu (Spanish)",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/Vegan_Bar_Esp.pdf"),
            "fbrestaurant_id" => 5,
        ]);

        /* ------------------------------------------------------- "In Room Dining" ------------------------------------------------------- */
        /* 1 */
        Fbrestaurantmenu::query()->create([
            "text" => "IRD Menu English",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/IRD_Menu_ENG.pdf"),
            "fbrestaurant_id" => 6,
        ]);

        /* 2 */
        Fbrestaurantmenu::query()->create([
            "text" => "IRD Menu Spanish",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/IRD_Menu_ESP.pdf"),
            "fbrestaurant_id" => 6,
        ]);

        /* 3 */
        Fbrestaurantmenu::query()->create([
            "text" => "Drinks",
            "url_pdf" => asset("storage/blog/food_beverage/restaurants/pdf/menus/IRD_Menu_Drinks.pdf"),
            "fbrestaurant_id" => 6,
        ]);
    }
}
