<?php

use App\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::query()->create([
            "slogan" => "Follow Us",
            "author" => "Andaz Mayakoba on Internet",
            "bg_footer" => asset("storage/blog/app/footer.jpg"),
            "btn_facebook_href" => null,
            "btn_instagram_href" => null,
            "btn_pinterest_href" => null,
        ]);
    }
}
