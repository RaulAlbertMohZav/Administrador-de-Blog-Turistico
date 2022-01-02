<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpsectioncontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spsectioncontents', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longText("url_image");
            $table->longText("description");
            $table->boolean("btn_show");
            $table->string("btn_text")->nullable();
            $table->longText("btn_href")->nullable();
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
        Schema::dropIfExists('spsectioncontents');
    }
}
