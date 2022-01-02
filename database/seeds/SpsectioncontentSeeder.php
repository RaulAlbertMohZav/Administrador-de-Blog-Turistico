<?php

use App\Spsectioncontent;
use Illuminate\Database\Seeder;

class SpsectioncontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */
        Spsectioncontent::query()->create([
            "title" => "Localization",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/activities_welness_program.jpg'),
            "description" => "<p>Andaz Mayakoba Resort Riviera Maya is located right on the beachfront and provides endless opportunities for watersports, nature adventures, and more. We provide inspiring experiences that range from biking through the property to tasting different tequilas.</p><p>All our activities require advanced reservation. <strong>Please book your spot with the Recreation Team, with Concierge at concierge.mayakoba@andaz.com or via WhatsApp</strong> You may also approach our Concierge Desk at the Sanctuary or find our Concierge Team at the beach.<p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);

        /* 2 */
        Spsectioncontent::query()->create([
            "title" => "Kimbo Kids Club",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/kimbo_kids_club.jpg'),
            "description" => "<p>Children between the ages 4 and 12 can enjoy Kimbo, our kids club. Activities here range from storytelling, arts and crafts, cooking, exercising, and more.You can book activities for Kimbo with Concierge or the Recreation Team.</p></p>Open daily from 9 AM to 5 PM.</p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);


        /* 3 */
        Spsectioncontent::query()->create([
            "title" => "Lagoon Eco-Cruise",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/lagoon_eco_cruise.jpg'),
            "description" => "<p>Cruise through the Mayakoba lagoon and discover the sights and sounds of Mexican flora and fauna that call this place home.</p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);


        /* 4 */
        Spsectioncontent::query()->create([
            "title" => "Bike Around Andaz",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/bike_around_andaz.jpg'),
            "description" => "<p>Both the resort and the Mayakoba complex are blessed with a series of bike trails that wind through the lush nature of the Caribbean. Grab a complimentary bike to tour the property!</p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);

        /* 5 */
        Spsectioncontent::query()->create([
            "title" => "Naum Wellness & Spa",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/naum_wellness_spa.jpg'),
            "description" => "<p>Enjoy one of the many Mayan-inspired rituals at Naum Wellness & Spa, where you will be able to custom-createyour rituals of choice based upon your intention. From body warps to facials, and everything in between,we invite you to step into this sanctuary of wellness. Don’t forget to try our apothecary experience andcreate your own natural scrubs or oils.</p><p>Check out our Wellness Program to book other experiences such as natural face mask workshops, yoga sessions, or Mayan meditations.</p><p>Book your ritual at <strong>naum.spa@andaz.com</strong> or with <strong>Concierge.</strong></p>",
            "btn_show" => true,
            "btn_text" => "Open Spa menu",
            "btn_href" => asset('storage/blog/activities/see_all_programs/pdf/Spa_Menu_eng.pdf'),
        ]);

        /* 6 */
        Spsectioncontent::query()->create([
            "title" => "Camp Mayakoba and Mayakoba Dive Center",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/dive_center.jpg'),
            "description" => "<p>Enjoy archery, kayak tours through the lagoon, jet skiis, wind surfing, and many other outdoor activities at either Camp Mayakoba or the Mayakoba Dive Center. Ask Concierge for further information.</p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);

        /* 7 */
        Spsectioncontent::query()->create([
            "title" => "El Camaleón Golf Course",
            "url_image" => asset('storage/blog/activities/see_all_programs/images/content/golf_course.jpg'),
            "description" => "<p>Discover this spectacular 18-hole golf course designed by PGA legend Greg Norman. Winding through mangroves and with spectacularviews of the Caribbean Sea, this course is the first to host the PGA Tour outside of United States andCanada, and is home to the Mayakoba Golf Classic every year</p>",
            "btn_show" => false,
            "btn_text" => null,
            "btn_href" => null,
        ]);
    }
}
