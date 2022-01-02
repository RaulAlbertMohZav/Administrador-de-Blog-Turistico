<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::query()->create([
            "title" => "Weddings",
            "description" => "Nestled along the glittery white-sand beachfront of the Riviera Maya and surrounded by nature, Andaz Mayakoba sets the stage for your ‘I do’. With a choice of stunning settings, unrivalled experiences, creative culinary and soulful service, Andaz Mayakoba will bring to life the engagement, wedding or blessing of your dreams.",
            "url_image" => asset("storage/blog/events/images/wedding.jpg"),
            "footer" => "For a personal consultation or enquiry regarding your dream wedding, please contact our wedding specialists at <strong>+52 984 149 1234</strong> or via email at <strong>cunam-rfp@andaz.com</strong>",
            "btn_show" => true,
            "btn_text" => "Wedding Brochure",
            "btn_href" => asset("storage/blog/events/pdf/Stylish_Bespoke_Weddings.pdf"),
        ]);

        Event::query()->create([
            "title" => "Meetings",
            "description" => "With stunning venues alongside the Mexican Caribbean or nestled amongst the Mayakoba lagoon, you can awaken your senses and get creative for innovative experiences that encourage the free flow of ideas. Andaz Mayakoba will bring to life the event you require.",
            "url_image" => asset("storage/blog/events/images/studios.jpg"),
            "footer" => "For personal consultation or enquire regarding meetings and events, please contact our specialists at <strong>+52 984 149 1234</strong> or via email at <strong>cunam-rfp@andaz.com</strong>",
            "btn_show" => true,
            "btn_text" => "Meetings Offer",
            "btn_href" => asset("storage/blog/events/pdf/Andaz-Mayakoba-MICE-2021.pdf"),
        ]);
    }
}
