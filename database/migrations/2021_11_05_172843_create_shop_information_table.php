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
            $table->increments('info_id');
            $table->unsignedBigInteger('shop_id');
            $table->string('name');
            $table->string('surname');
            $table->string('number')->unique();
            $table->string('adress');
            $table->json('location')->nullable();
            $table->json('work_time')->nullable();
            $table->string('avatar')->nullable();

           $table->foreign('shop_id')->on('shops')->references('id')->cascadeOnUpdate();
/*
biz kecen defe nece cekmishdim mainden?yadimda deyil ki qaqa.o cox qeliz oldu uzun cekdi
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
