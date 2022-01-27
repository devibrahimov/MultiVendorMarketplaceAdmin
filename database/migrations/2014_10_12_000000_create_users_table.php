<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('token')->nullable();
            $table->string('aprovel')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->string('number')->nullable();
            $table->string('role')->default(0);
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
