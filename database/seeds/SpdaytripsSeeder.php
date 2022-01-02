<?php

use App\Spdaytrips;
use Illuminate\Database\Seeder;

class SpdaytripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */
        Spdaytrips::query()->create([
            "url_image" => asset("storage/blog/activities/see_all_programs/images/day_trips/cozumel.jpg"),
            "title" => "Cozumel",
        ]);

        /* 2 */
        Spdaytrips::query()->create([
            "url_image" => asset("storage/blog/activities/see_all_programs/images/day_trips/experience_xcaret.jpg"),
            "title" => "Experiencias Xcaret",
        ]);


        /* 3 */
        Spdaytrips::query()->create([
            "url_image" => asset("storage/blog/activities/see_all_programs/images/day_trips/holbox.jpg"),
            "title" => "Isla Holbox",
        ]);

        /* 4 */
        Spdaytrips::query()->create([
            "url_image" => asset("storage/blog/activities/see_all_programs/images/day_trips/isla_mujeres.jpg"),
            "title" => "Isla Mujeres Catamaran Trip",
        ]);

        /* 5 */
        Spdaytrips::query()->create([
            "url_image" => asset("storage/blog/activities/see_all_programs/images/day_trips/kantunchi.jpg"),
            "title" => "Kantun-Chi Cenote Park",
        ]);
    }
}
