<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->char('book_isbn', 13);
            $table->string('book_title', 200);
            $table->string('book_author', 100);
            $table->UNSIGNEDINTEGER('book_publisher_id');
            $table->date('book_publication_date');
            $table->integer('book_quantity');
            $table->float('book_price');
            $table->float('book_sale');
            $table->text('book_img');
            $table->text('book_description');
            $table->UNSIGNEDINTEGER('book_category_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('book_category_id')->references('book_category_id')->on('book_categories');
            $table->foreign('book_publisher_id')->references('book_publisher_id')->on('book_publishers');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
