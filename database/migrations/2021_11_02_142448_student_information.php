<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->string('studentID')->unique();
            $table->string('name');
            $table->string('department');
            $table->string('email')->unique();;
            $table->string('gender');
            $table->string('phone')->unique();
            $table->string('guardianPhone');
            $table->string('nationality');
            $table->string('address');
            $table->string('seatNumber');
            $table->string('paymentStatus')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('student_information');
    }
}
