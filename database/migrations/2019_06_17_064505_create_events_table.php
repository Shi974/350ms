<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('titre');
            $table->integer('date');
            $table->integer('horaire_debut');
            $table->integer('duree');
            $table->string('lieu');
            $table->integer('nb_place');
            $table->integer('nb_place_reserve');
            $table->integer('fin_inscription');
            $table->string('recompense');
            $table->integer('prix');
            $table->string('name');
    
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
        Schema::dropIfExists('events');
    }
}
