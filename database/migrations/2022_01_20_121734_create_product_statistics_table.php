<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStatisticsTable extends Migration
{

    public function up()
    {
        Schema::create('product_statistics', function (Blueprint $table) {
            //$table->id();
            $table->integerIncrements('static_id');
            $table->integer('product_id')->nullable();
            $table->integer('hit')->nullable();
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
        Schema::dropIfExists('product_statistics');
    }
}
