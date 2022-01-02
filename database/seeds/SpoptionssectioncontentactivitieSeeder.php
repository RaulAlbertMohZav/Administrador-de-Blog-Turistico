<?php

use App\Spoptionssectioncontentactivitie;
use Illuminate\Database\Seeder;

class SpoptionssectioncontentactivitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Diving School - English",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_DivingSchool-Eng.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 2 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Diving School - Spanish",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_DivingSchool-Esp.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 3 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Ocean Sports - English",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_OceanSports-Eng.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 4 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Ocean Sports - Spanish",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_OceanSports-Esp.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 5 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Van Dutch Yacht - English",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_VD55-Eng.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 6 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Van Dutch Yacht - Spanish",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/MYKB_VD55-Esp.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 7 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Experiences - English",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/Mayakoba_Experiences_Eng.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 8 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "Mayakoba Experiences - Spanish",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/Mayakoba_Experiences_Esp.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 9 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "El Camaleon Golf Course - English",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/Mayakoba_Golf_Course_Eng.pdf"),
            "spsectioncontent_id" => 6,
        ]);

        /* 10 */
        Spoptionssectioncontentactivitie::query()->create([
            "text" => "El Camaleon Golf Course - Spanish",
            "pdf_href" => asset("storage/blog/activities/see_all_programs/pdf/Mayakoba_Golf_Course_Esp.pdf"),
            "spsectioncontent_id" => 6,
        ]);
    }
}
