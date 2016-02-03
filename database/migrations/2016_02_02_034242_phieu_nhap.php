<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhieuNhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhaps', function (Blueprint $table) {
            $table->increments('mapn');
            $table->UNSIGNEDINTEGER('book_publisher_id');
            $table->date('ngaynhap');
            $table->rememberToken();
            $table->timestamps();

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
        SChema::drop('phieunhap');
    }
}
