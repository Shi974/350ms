<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\User;

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

        $event = new Event;
        $event->jeu = "Soul Calibur";
        $event->date = "2019-08-13";
        $event->horaire_debut = "15:45:00";
        $event->duree = "2 jours";
        $event->lieu = "Saint-Gilles";
        $event->nb_place = 24;
        $event->nb_place_reserve = 16;
        $event->fin_inscription = "2019-07-30";
        $event->image = "sc.png";
        $event->recompense = "Skin CS:GO";
        $event->prix = null;
        $event->save();

        $event = new Event;
        $event->jeu = "Tekken 7";
        $event->date = "2019-06-21";
        $event->horaire_debut = "20:00:00";
        $event->duree = "4 heures";
        $event->lieu = "Chez Kévin";
        $event->nb_place = 6;
        $event->nb_place_reserve = null;
        $event->fin_inscription = "2019-06-20";
        $event->image = "t7.png";
        $event->recompense = null;
        $event->prix = "5";
        $event->save();
    }
}
