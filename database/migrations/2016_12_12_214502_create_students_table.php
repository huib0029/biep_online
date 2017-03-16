<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('middlename');
            $table->string('last_name');
            $table->string('student_id');
            $table->string('tel_parents');
            $table->integer('approved');
            $table->integer('rejected');
            $table->mediuminteger('branch');
            $table->mediuminteger('category');
            $table->mediuminteger('year');
            $table->date('birth_date');
            $table->string('email_id')->unique();
            $table->string('email_parents');
            $table->mediumInteger('books_issued');
            $table->rememberToken();
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
