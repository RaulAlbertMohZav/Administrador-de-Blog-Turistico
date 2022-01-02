<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealplanindividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealplanindividuals', function (Blueprint $table) {
            $table->id();
            $table->string("text");
            $table->longText("item_href");
            $table->foreignId("fbexperiencecard_id")->references("id")->on("fbexperiencecards")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('mealplanindividuals');
    }
}
