<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonDatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathangs', function (Blueprint $table) {
            $table->increments('sohoadon');
            $table->UNSIGNEDINTEGER('user');
            $table->date('ngaydathang');
            $table->date('ngaygiaohang');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user')->references('user')->on('users');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SChema::drop("dondathang");
    }
}
