<?php

use Illuminate\Database\Seeder;
use App\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::query()->create([
            "title" => "Relax, you are here",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);

        Header::query()->create([
            "title" => "Andaz Mayakoba Experiences",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);

        Header::query()->create([
            "title" => "Restaurants",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);

        Header::query()->create([
            "title" => "F&B Experiences",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);

        Header::query()->create([
            "title" => "Events",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);

        Header::query()->create([
            "title" => "News",
            "bg_image" => asset('storage/blog/app/header.jpg'),
        ]);
    }
}
