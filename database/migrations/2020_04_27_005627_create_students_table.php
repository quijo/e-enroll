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
            $table->string('stud_fname');
            $table->string('stud_lname');
            $table->string('stud_gender');
            $table->string('stud_grade');
            $table->date('stud_birth');
            $table->string('stud_bplace');
            $table->string('stud_address');
            $table->string('par_name');
            $table->string('par_contact');
            $table->string('par_address');
            $table->string('par_email');
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
