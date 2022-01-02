<?php

use App\Spsectionheader;
use Illuminate\Database\Seeder;

class SpsectionheaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spsectionheader::query()->create([
            "title" => "Activities & Wellness Program",
            "description" => "Explore your senses and discover Andaz Mayakoba. Click on our activities calendar below to see all we have to offer you this week.",
            "btn_href_pdf" => asset("storage/blog/activities/see_all_programs/pdf/Activities_Program_Julio_W1.pdf"),
        ]);

        Spsectionheader::query()->create([
            "title" => "We recommend you don’t miss the following activities:",
            "description" => "<p><strong>Photo Session</strong></p>Cherish your memories forever with a photo session at Andaz Mayakoa.<br>325 USD + VAT for 1 hour session, including 60 edited photos for social media.<br>",
            "btn_href_pdf" => null,
        ]);
    }
}
