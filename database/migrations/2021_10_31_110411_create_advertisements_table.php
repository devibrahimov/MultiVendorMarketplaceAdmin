<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->longText('url')->nullable();
            $table->string('type')->nullable();
            $table->string('page')->nullable();
            $table->string('line')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('stop_time');

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
        Schema::dropIfExists('advertisements');
    }
}
