<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('student_name');
            $table->string('idno')->nullable();
            $table->string('regno')->nullable();

            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();

            $table->string('session')->nullable();
            $table->string('year')->nullable();
            $table->string('semester')->nullable();

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
        Schema::dropIfExists('students');
    }
}
