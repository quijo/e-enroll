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
            $table->string('stud_fname_field');
            $table->string('stud_lname_field');
            $table->string('stud_gender_field');
            $table->string('stud_grade_field');
            $table->date('stud_birth_field');
            $table->string('stud_bplace_field');
            $table->string('stud_address_field');
            $table->string('par_name_field');
            $table->string('par_contact_field');
            $table->string('par_address_field');
            $table->string('par_email_field');
            $table->string('status')->default('pending');
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
