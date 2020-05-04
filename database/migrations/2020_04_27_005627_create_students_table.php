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
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Gender')->nullable;
            $table->string('Grade_Level');
            $table->date('Birthday')->nullable;
            $table->string('Birth_Place')->nullable;
            $table->string('Student_Address')->nullable;
            $table->string('Parents_Name');
            $table->string('Parents_Contact');
            $table->string('Parents_Address')->nullable;
            $table->string('Parents_Email')->nullable;
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
