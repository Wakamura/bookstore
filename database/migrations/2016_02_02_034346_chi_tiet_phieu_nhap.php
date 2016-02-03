<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietPhieuNhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietphieunhaps', function (Blueprint $table) {
            $table->increments('chitietphieunhap_id');
            $table->UNSIGNEDINTEGER('mapn');
            $table->UNSIGNEDINTEGER('book_id');
            $table->integer('soluong');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('book_id')->references('book_id')->on('books');
            $table->foreign('mapn')->references('mapn')->on('phieunhaps');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chitietphieunhap');
    }
}
