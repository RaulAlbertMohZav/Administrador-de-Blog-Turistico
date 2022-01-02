<?php

use App\HomeCarousel;
use Illuminate\Database\Seeder;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeCarousel::query()->create([
            "url_image" => asset('storage/blog/home/images/carousel/activities_card.jpg'),
            "title" => "Activities",
            "href" => route('see-all-programs'),
        ]);

        HomeCarousel::query()->create([
            "url_image" => asset('storage/blog/home/images/carousel/restaurants_card.jpg'),
            "title" => "Restaurants",
            "href" => route('restaurants'),
        ]);

        HomeCarousel::query()->create([
            "url_image" => asset('storage/blog/home/images/carousel/experiencies_card.jpg'),
            "title" => "Experiences",
            "href" => route('f&b-experience'),
        ]);

        HomeCarousel::query()->create([
            "url_image" => asset('storage/blog/home/images/carousel/events_card.jpg'),
            "title" => "Events",
            "href" => route('events'),
        ]);

        HomeCarousel::query()->create([
            "url_image" => asset('storage/blog/home/images/carousel/news_card.jpg'),
            "title" => "News",
            "href" => route('news'),
        ]);
    }
}
