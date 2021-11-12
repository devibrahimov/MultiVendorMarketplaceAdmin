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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('shopname');
            $table->unsignedBigInteger('region_id');
            $table->string('number')->unique();
            $table->string('email')->unique();
            $table->string('role')->default(0);
            $table->string('aprovel')->default(0);
            $table->string('adress');
            $table->json('location')->nullable();
            $table->json('work_time');
            $table->string('avatar')->nullable();
            $table->string('shop_serialnumber')->unique();
            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
