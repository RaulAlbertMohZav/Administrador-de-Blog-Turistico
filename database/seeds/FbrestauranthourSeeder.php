<?php

use App\Fbrestauranthour;
use Illuminate\Database\Seeder;

class FbrestauranthourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* ------------------------------------- "Casa Amate" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Dinner: 6:00 PM – 10:00 PM",
            "fbrestaurant_id" => 1,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Happy Hour: 5:00 PM – 6:00 PM",
            "fbrestaurant_id" => 1,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Sunday Brunch: 11:00 AM - 3:00 PM",
            "fbrestaurant_id" => 1,
        ]);

        /* ------------------------------------- "Cocina Milagro" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Breakfast: 7:00 AM – 11:00 AM",
            "fbrestaurant_id" => 2,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Lunch: 12:00 PM - 5:00 PM",
            "fbrestaurant_id" => 2,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Dinner: 6:00 PM - 10:00 PM",
            "fbrestaurant_id" => 2,
        ]);

        /* ------------------------------------- "Tinta del Pulpo" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Breakfast: 7:00 AM – 11:00 AM",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Lunch: 12:00 PM - 6:00 PM",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Dinner: 6:00 PM - 10:00 PM",
            "fbrestaurant_id" => 3,
        ]);

        /* ------------------------------------- "Sotavento" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Dinner: 6:00 PM – 10:00 PM",
            "fbrestaurant_id" => 4,
        ]);

        /* ------------------------------------- "Vegan Bar" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Lunch: 11:00 AM – 5:00 PM",
            "fbrestaurant_id" => 5,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Happy Hour: 6:00 PM – 7:00 PM",
            "fbrestaurant_id" => 5,
        ]);

        Fbrestauranthour::query()->create([
            "text" => "Bar: 6:00 PM – 10:00 PM",
            "fbrestaurant_id" => 5,
        ]);

        /* ------------------------------------- "In Room Dining" ------------------------------------- */
        Fbrestauranthour::query()->create([
            "text" => "Service 24 Hours",
            "fbrestaurant_id" => 6,
        ]);
    }
}
