<?php

use App\Fbrestaurantambience;
use Illuminate\Database\Seeder;

class FbrestaurantambienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* ------------------------------------- "Casa Amate" ------------------------------------- */
        Fbrestaurantambience::query()->create([
            "text" => "Live Guitar: Thursday to Saturday (8:00 PM - 10:00 PM)",
            "fbrestaurant_id" => 1,
        ]);

        Fbrestaurantambience::query()->create([
            "text" => "Live DJ: Thursday to Saturday (10:00 PM - 12:00 PM)",
            "fbrestaurant_id" => 1,
        ]);

        /* ------------------------------------- "Cocina Milagro" ------------------------------------- */

        /* ------------------------------------- "Tinta del Pulpo" ------------------------------------- */
        Fbrestaurantambience::query()->create([
            "text" => "Live DJ: Thursday to Saturday (12:00 PM - 4:00 PM)",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestaurantambience::query()->create([
            "text" => "Sundae Funday: Monday to Sunday (11:00 AM - 5:00 PM)",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestaurantambience::query()->create([
            "text" => "Pop Up - Tacos de Suadero: Tuesday (1:00 PM - 5:00 PM)",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestaurantambience::query()->create([
            "text" => "Pop Up - Tacos de Asada: Thursday (1:00 PM - 5:00 PM)",
            "fbrestaurant_id" => 3,
        ]);

        Fbrestaurantambience::query()->create([
            "text" => "Pop Up - Tacos de Pastor: Saturday (1:00 PM - 5:00 PM)",
            "fbrestaurant_id" => 3,
        ]);

        /* ------------------------------------- "Sotavento" ------------------------------------- */
        Fbrestaurantambience::query()->create([
            "text" => "Live Music: Wednesday and Friday (6:30 PM - 9:00 PM)",
            "fbrestaurant_id" => 4,
        ]);

        /* ------------------------------------- "Vegan Bar" ------------------------------------- */

        /* ------------------------------------- "In Room Dining" ------------------------------------- */
    }
}
