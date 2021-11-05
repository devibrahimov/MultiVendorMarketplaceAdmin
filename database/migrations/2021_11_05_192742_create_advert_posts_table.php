<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('region_id');
            $table->string('name')->index('product_name');
            $table->string('slug')->index('product_slug');
            $table->string('price')->nullable()->comment('null olarsa razilashma yolu ile olacaq');
            $table->text('description');
            $table->string('serialnumber')->unique('serialnumber');
            $table->enum('type',['adv','service']);
            $table->dateTime('stop_at')->nullable();
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
        Schema::dropIfExists('advert_posts');
    }
}
