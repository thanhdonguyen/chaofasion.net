<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_out', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->integer('don_gia');
            $table->string('note');
            $table->string('bill');
            $table->integer('so_luong');
            $table->integer('product_id');
            $table->string('alias');
            $table->string('image');
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
        Schema::dropIfExists('check_out');
    }
}
