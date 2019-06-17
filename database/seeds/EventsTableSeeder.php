<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event;
        $event->jeu = "Rocket League";
        $event->date = "2019-07-15";
        $event->horaire_debut = "10:30:00";
        $event->duree = "3 heures";
        $event->lieu = "Serveur Discord : [974]Game On";
        $event->nb_place = 12;
        $event->nb_place_reserve = 3;
        $event->fin_inscription = "2019-07-12";
        $event->image = "rl.png";
        $event->recompense = null;
        $event->prix = null;
        $event->save();
    }
}
