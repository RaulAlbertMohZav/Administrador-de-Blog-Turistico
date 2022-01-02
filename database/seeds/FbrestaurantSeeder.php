<?php

use App\Fbrestaurant;
use Illuminate\Database\Seeder;

class FbrestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/amate.jpg"),
            "title" => "Casa Amate",
            "description" => "<p> Open exclusively for dinner and serving diverse Latin American cuisine, Casa Amate is one of Mexico's <strong>Top 120 Restaurants</strong> by Guía México Gastronómic. The restaurant has a unique and sophisticated residential concept designed to resemble the home of an eclectic traveler passionate about Latin culture. The restaurant is built around a courtyard overlooking the resort’s surrounding lagoon with a special Amate tree, which gives the venue its name. Each intimate room is specifically designed, as one would find in a house including a “Bar Studio, Library”, “Estancia” and the “The Comedor.”</p>",
        ]);

        /* 2 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/cm.jpg"),
            "title" => "Cocina Milagro",
            "description" => "<p> Located in the heart of the resort, is the resort’s poolside pavilion restaurant featuring floor-to-ceiling glass doors and windows, two open kitchens and a bar terrace. Guests enjoy stunning views of the mangroves while dining. The interior of the restaurant is a combination of stone locally handcrafted tile, local tzalam wood, and stone. Offering breakfast with a market-to-table menu concept. </p>",
        ]);

        /* 3 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/tinta.jpg"),
            "title" => "Tinta del Pulpo",
            "description" => "<p> Tinta del Pulpo is open for lunch and dinner, and offers all-day poolside Mexican and international cuisine, tasty sauces made with local produce and locally crafted artisan beers. The restaurant also offers fresh ceviches, aguachiles, and a variety of desserts including homemade churros and authentic local sweets. </p>",
        ]);

        /* 4 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/sotavento.jpg"),
            "title" => "Sotavento",
            "description" => "<p> Inspired by a shipwreck that washed up on the Mayakoba shore and with front-row views of the gorgeous Mexican Caribbean Sea, Sotavento offers a casual ambiance and Mediterranean flavors – fresh seafood, light salads, and gorgeous desserts – all to be enjoyed with your feet in the sand. Take in spectacular views of the turquoise ocean at this sun-soaked daytime venue that turns into an exciting evening experience. </p>",
        ]);

        /* 5 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/vb.jpg"),
            "title" => "Vegan Bar",
            "description" => "<p>Join us at VB for a variety of healthy juices and smoothies during the day and a selection of fresh and seasonal vegan dishes for lunch. Guests can enjoy amazing views from our outdoor terrace. </p>",
        ]);

        /* 6 */
        Fbrestaurant::query()->create([
            "url_image" => asset("storage/blog/food_beverage/restaurants/images/content/ird.jpg"),
            "title" => "In Room Dining",
            "description" => "<p> Enjoy a selection of options for breakfast, lunch and dinner, including the classic continental breakfast, Mexican snacks, sandwiches, salads and pastas right in the comfort of your room or suite. </p>",
        ]);
    }
}
