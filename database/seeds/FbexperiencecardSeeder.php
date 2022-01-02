<?php

use App\Fbexperiencecard;
use Illuminate\Database\Seeder;

class FbexperiencecardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fbexperiencecard::query()->create([
            "url_image" => asset("storage/blog/food_beverage/experiences/images/journeyvol.jpg"),
            "title" => "A Culinary Journey",
            "description" => "Our culinary journey reflects our passion for fresh local ingredients, authentic cuisine, creative mixology and soulful service, capturing the essence of Latin American culture and the ongoing search for new dining experiences and greater culinary knowledge",
        ]);

        Fbexperiencecard::query()->create([
            "url_image" => asset("storage/blog/food_beverage/experiences/images/amenities.jpg"),
            "title" => "Amenities",
            "description" => "Surprise your friends, family or loved one with a personalized in-room amenity",
        ]);

        Fbexperiencecard::query()->create([
            "url_image" => asset("storage/blog/food_beverage/experiences/images/amenities_upgrade.jpg"),
            "title" => "Upgrade your stay with Food and Beverages",
            "description" => "Our all-inclusive package will delight the most demanding palate. Choose from five distinctive dining experiences to enjoy an inspiring taste of the region and beyond, from sophisticated traditional Latin American cuisine to casual Mexican fare.",
        ]);

        Fbexperiencecard::query()->create([
            "url_image" => asset("storage/blog/food_beverage/experiences/images/private_dinner.jpg"),
            "title" => "Private Dinners & Meal Tours",
            "description" => "Enjoy our culinary offer in a unique private setting surrounded by lush landscapes, or cruising down the Mayakoba lagoon with friends and family. Be ready to enjoy creative culinary and soulful service.",
        ]);
    }
}
