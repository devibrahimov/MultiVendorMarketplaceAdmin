<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_information', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('username');
            $table->string('phone_number');
            $table->string('adress');
            $table->json('location')->nullable();
            $table->json('work_time') ;
            $table->string('avatar');
            $table->string('serial_number')->unique();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_information');
    }
}
