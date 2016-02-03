<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->UNSIGNEDINTEGER('sohoadon');
            $table->UNSIGNEDINTEGER('book_id');
            $table->integer('soluong');
            $table->rememberToken();
            $table->timestamps();

            $table->primary(['sohoadon', 'book_id']);
            $table->foreign('sohoadon')->references('sohoadon')->on('dondathangs');
            $table->foreign('book_id')->references('book_id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chitiethoadon');
    }
}
