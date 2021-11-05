<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wish_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('wish_id')->references('id')->on('user_wishlist')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('post_id')->references('id')->on('advert_posts')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('wishlist_data');
    }
}
