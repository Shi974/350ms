<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // SI CETTE TABLE PLANTE AU SEED, RECREER TABLE + MODEL AVEC USERS PLURIEL
        Schema::create('event_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('event_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_users');
    }
}
