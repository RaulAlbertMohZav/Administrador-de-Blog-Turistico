<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpoptionssectioncontentactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spoptionssectioncontentactivities', function (Blueprint $table) {
            $table->id();
            $table->string("text");
            $table->longText("pdf_href");
            $table->foreignId("spsectioncontent_id")->references("id")->on("spsectioncontents")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spoptionssectioncontentactivities');
    }
}
