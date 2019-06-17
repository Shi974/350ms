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
            $table->string('jeu');
            $table->date('date'); // DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour)
            $table->time('horaire_debut');
            $table->string('duree')->nullable();
            $table->string('lieu');
            $table->integer('nb_place');
            $table->integer('nb_place_reserve')->nullable();
            $table->date('fin_inscription')->nullable();
            $table->string('image');
            $table->string('recompense')->nullable();
            $table->integer('prix')->nullable();
    
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
