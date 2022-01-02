<?php

use App\Spsectionsidebarcontent;
use Illuminate\Database\Seeder;

class SpsectionsidebarcontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */
        Spsectionsidebarcontent::query()->create([
            "title" => "Activity of the Week: How to Make the Perfect Margarita",
            "subtitle" => null,
            "description" => "<p>Learn the art of making a true Mexican margarita to complement your luxury getaway. <strong>Available at 1 PM at VB, $25 USD + VAT per person.</strong> Reservation required 24 hours in advance (ext. 4790).</p>",
        ]);

        /* 2 */
        Spsectionsidebarcontent::query()->create([
            "title" => "Treatment of the Week: 50-minute Relaxing Massage",
            "subtitle" => null,
            "description" => "<p>Relax at Naum Wellness & Spa with this 50-minute relaxing massage and 25 Hydrating facial for only $175 USD available only this week. Reserve in advance with spa or concierge.</p>",
        ]);

        /* 3 */
        Spsectionsidebarcontent::query()->create([
            "title" => "Enhance Your Stay with These Other Services",
            "subtitle" => "Baby Sitting Service",
            "description" => "<p>Enjoy some time off – we’ll take care of the kids! Available daily, <strong>24-hours</strong>. Book 6 hours in advance. Cost: $20 USD per hour, per child.For two children, $30 USD per hour. Services after 8 PM have an extra cost of $15 USD for transportation fee. Maximum two children per nanny.</p>",
        ]);

        /* 4 */
        Spsectionsidebarcontent::query()->create([
            "title" => null,
            "subtitle" => "Andaz Boutique",
            "description" => "<p>Whether you forgot something or want to upgrade your outfit, you can find fashion and conveniences at the Andaz Boutique located by the beach. <strong>Open daily from 9:00 AM to 5:00 PM</strong>, next to VB restaurant.</p>",
        ]);

        /* 5 */
        Spsectionsidebarcontent::query()->create([
            "title" => null,
            "subtitle" => "Cart Rental for Bikes",
            "description" => "<p>For a family-friendly bike ride, you can rent bicycle carts daily from <strong>9:00 AM to 5:00 PM</strong> at Kimbo Kids Club. Cost is $15 USD + TAX for 24 hours.</p>",
        ]);
    }
}
