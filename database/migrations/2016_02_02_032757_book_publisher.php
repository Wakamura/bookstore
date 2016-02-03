<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookPublisher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_publishers', function (Blueprint $table) {
            $table->increments('book_publisher_id');
            $table->text('book_publisher_name');
            $table->text('book_publisher_description');
            $table->text('book_publisher_icon');
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
        Schema::drop('book_publisher');
    }
}
