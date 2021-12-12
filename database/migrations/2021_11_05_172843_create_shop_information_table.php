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
            $table->unsignedBigInteger('shopcategory');
            $table->string('number')->unique();
            $table->string('email')->unique();
            $table->string('aprovel')->default(0);
            $table->string('adress');
            $table->json('location')->nullable();
            $table->json('work_time');
            $table->string('avatar')->nullable();
            $table->string('shop_serialnumber')->unique();

/*
 *  Ad ,
 *  Soyad ,
 *  Mağaza adı ,
 *  Bölgə / Şəhər ,
 *  Telefon nömrəsi ,
 *  Email adresi ,
 *  Mağaza Kategoriyası ,(Geyim , Mebel, Məişət əşyaları ,və s.)
 *  Adres (Tam adres) ,
 * İş saatları , (3 input olacaq , biri select olacaq (Rəsmi Tətil günləri xaric)(hefte içi ,6-ün , hər gün) iş başlama
 * saatı ,İş bitiş saatı)
 *
 */
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
