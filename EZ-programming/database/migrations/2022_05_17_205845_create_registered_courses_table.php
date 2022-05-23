<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Course_id');
            $table->foreign('Course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('Teacher_id');
            $table->foreign('Teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('Student_id');
            $table->foreign('Student_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('City');
            $table->foreign('City')->references('City')->on('courses')->onDelete('cascade');
            $table->date('Start_date');
            $table->date("End_Date");
            $table->string("Paid");
            $table->float("TMoney");
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
        Schema::dropIfExists('registered_courses');
    }
}
