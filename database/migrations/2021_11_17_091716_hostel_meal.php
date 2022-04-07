<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HostelMeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostle_meal', function (Blueprint $table) {
            $table->id();
            $table->string('mealDay');
            $table->string('mealType');
            $table->string('mealItems');
            $table->string('mealPrice');
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
        Schema::dropIfExists('hostle_meal');
    }
}
