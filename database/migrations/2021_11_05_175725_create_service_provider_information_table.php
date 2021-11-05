<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProviderInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_information', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->enum('type',['veterinary','clinic']);
            $table->string('username');
            $table->string('avatar');
            $table->string('serial_number')->unique();
            $table->string('phone_number');
            $table->string('adress');
            $table->json('location')->nullable();
            $table->json('work_time');
            $table->json('documents')->nullable();
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
        Schema::dropIfExists('service_provider_information');
    }
}
