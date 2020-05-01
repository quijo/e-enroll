<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('col_students', function (Blueprint $table) {
            $table->id();
            $table->string('col_stud_fname_field');
            $table->string('col_stud_lname_field');
            $table->string('col_stud_gender_field');
            $table->string('col_stud_course_field');
            $table->date('col_stud_birth_field');
            $table->string('col_stud_bplace_field');
            $table->string('col_stud_address_field');
            $table->string('col_par_name_field');
            $table->string('col_par_contact_field');
            $table->string('col_par_address_field');
            $table->string('col_par_email_field');
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
        Schema::dropIfExists('col_students');
    }
}
