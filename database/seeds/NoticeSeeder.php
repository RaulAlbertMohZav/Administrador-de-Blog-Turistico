<?php

use App\Notice;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::query()->create([
            "title" => "From Mexico to Andaz – Volume II: Central Mexico",
            "description" => "Alligned with the values that Hyatt lives, we launched a new initiative From Mexico to Andaz, back in March with Volume I: Oaxaca. Today, we have launched our second volume – Central Mexico – to celebrate creative culinary and immersive local experiences throughout a 360° experience in the resort. From Mexico to Andaz, Volume II will be available at the resort through September.",
            "url_video" => asset("storage/blog/news/videos/EdoMex_Vol2.mp4"),
        ]);

        Notice::query()->create([
            "title" => "Andaz Mayakoba Supports Sancvs Foundation",
            "description" => "In an effort to give back to our community, we are collaborating with Sancvs Foundation to help Centinelas del Agua A.C. build a new community center in a small community with a population of less than 900 in the Yucatan Peninsula. The center will be designed to promote environmental education and offer technology and tools to help the population continue their educational efforts. Your donation at checkout will support academic and environmental programs in Mexico, and will be matched by our parent company by 120%.",
            "url_video" => null,
        ]);

        Notice::query()->create([
            "title" => "From Mexico to Andaz – Volume I: Oaxaca",
            "description" => "Alligned with the values that Hyatt lives, we decided to launch the initiative From Mexico to Andaz, which is a creative culinary and immersive local experience thought to bring the best of Mexico to the resort. We are getting to launch Volume II: Central Mexico. In the meantime, enjoy a recap of what we lived during our first Volume in the video below.",
            "url_video" => asset("storage/blog/news/videos/oaxaca_EN_vol1.mp4"),
        ]);

        Notice::query()->create([
            "title" => "Andaz Mayakoba: Best Resort in Mexico by Condé Nast Traveler",
            "description" => "We are thrilled to share that we are currently #1 Resort in Mexico by Condé Nast Traveler’s 2020 Readers’ Choice Awards. These awards are the longest running and one of the most prestigious recognitions of excellence in the travel industry. We strive to deliver our guests a memorable visit experience where they can embark on new adventures, experience the local culture and explore the resort and its many amenities. These include highly personalized service, authentic cultural experiences, diverse food and beverage offerings, luxury accommodations, wellness and more.",
            "url_video" => asset("storage/blog/news/videos/oaxaca_EN.mp4"),
        ]);
    }
}
