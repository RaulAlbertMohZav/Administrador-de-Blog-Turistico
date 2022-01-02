<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformativehomesectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informativehomesections', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("slogan");
            $table->longText("description");
            $table->string("footer");
            $table->longText("button_english_href");
            $table->longText("button_spanish_href");
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
        Schema::dropIfExists('informativehomesections');
    }
}
