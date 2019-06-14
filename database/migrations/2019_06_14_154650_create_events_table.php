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
            $table->timestamps();
            $table->string('name');
            $table->date('date'); // DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour)
            $table->string('place');
            $table->string('game');
            $table->string('reward');
            // AJOUTER ICI LES DIFFERENTES COLONNES DE LA TABLE EVENTS
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
