<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            //$table->bigIncrements('id');
            $table->string('jeu');
            $table->date('date'); // DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour)
            $table->time('horaire_debut'); // TIME -> format hh:mm:ss
            $table->string('duree')->nullable();
            $table->string('lieu');
            $table->integer('nb_place');
            $table->integer('nb_place_reserve')->nullable();
            $table->date('fin_inscription')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('evenements');
    }
}
