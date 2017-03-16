<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksIssued extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books_issued', function (Blueprint $table) {
          $table->increments('id');
          $table->string('book_id');
          $table->string('book_isbn');
          $table->string('book_title');
          $table->string('book_author_name');
          $table->string('book_author_id');
          $table->string('book_colorcat');
          $table->longText('book_dis');
          $table->string('student_id');
          $table->string('student_name');
          $table->timestamp('date_out');
          $table->string('date_in');
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
        Schema::dropIfExists('books_issued');
    }
}
