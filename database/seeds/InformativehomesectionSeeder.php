<?php

use App\Informativehomesection;
use Illuminate\Database\Seeder;

class InformativehomesectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informativehomesection::query()->create([
            "title" => "COVID-19 & SAFETY PROTOCOLS",
            "slogan" => "The safety and wellbeing of our guests and colleagues is always a top priority. On-property COVID-19 PCR testing for a fee or complimentary is available for guests.",
            "description" => "Enhanced measures around cleanliness, sanitization and social distancing have been implemented in an effort to ensure our guests and colleagues enjoy a healthy, safe and comfortable environment.",
            "footer" => "COVID-19 Test Information",
            "button_english_href" => asset("storage/blog/home/pdf/COVID_19Testing_ENG.pdf"),
            "button_spanish_href" => asset("storage/blog/home/pdf/COVID_19Testing_ESP.pdf"),
        ]);
    }
}
