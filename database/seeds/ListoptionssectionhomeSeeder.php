<?php

use App\Listoptionssectionhome;
use Illuminate\Database\Seeder;

class ListoptionssectionhomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listoptionssectionhome::query()->create([
            "text" => "Limited service available – Fitness center (maximum of 5 people), Spa, Kids Club (limited capacity)",
            "informativehomesection_id" => 1,
        ]);

        Listoptionssectionhome::query()->create([
            "text" => "Face coverings – Required in hotel indoor public areas and when moving around in outdoor area",
            "informativehomesection_id" => 1,
        ]);
    }
}
