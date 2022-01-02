<?php

use App\Subheader;
use Illuminate\Database\Seeder;

class SubheaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subheader::query()->create([
            "title" => "We are delighted to have you with us.",
            "description" => "In this website, you will find everything you need for an amazing stay.",
            "bg_image" => null,
        ]);

        /*  Subheader::query()->create([
            "title" => "Activities & Wellness Program",
            "description" => "Explore your senses and discover Andaz Mayakoba. Click on our activities calendar below to see all we have to offer you this week.",
            "bg_image" => null //asset('storage/blog/activities/see_all_programs/images/content/activities_welness_program.jpg'),
        ]);

        Subheader::query()->create([
            "title" => "We recommend you don’t miss the following activities:",
            "description" => "<p><b>Photo Session</b></p>
            <p>Cherish your memories forever with a photo session at Andaz Mayakoa.</p>
            <p>325 USD + VAT for 1 hour session, including 60 edited photos for social media.</p>",
            "bg_image" => null,
        ]); */

        Subheader::query()->create([
            "title" => null,
            "description" => "Andaz Mayakoba features five on-site restaurants that feature fresh, local ingredients for a unique culinary experience.",
            "bg_image" => null,
        ]);

        Subheader::query()->create([
            "title" => "F&B Experiences and Amenities",
            "description" => "Explore more about our gastronomic offer during your stay.",
            "bg_image" => null,
        ]);
    }
}
