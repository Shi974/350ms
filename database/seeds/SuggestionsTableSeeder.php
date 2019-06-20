<?php

use Illuminate\Database\Seeder;
use App\Suggestion;

class SuggestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $suggestion = new Suggestion;
        $suggestion->id = 1;
        $suggestion->user_id = 2;
        $suggestion->titre = "Final Fantasy XIV";
        $suggestion->message = "Hello ! J'aimerais trop qu'on puisse organiser un tournoi de PVP sur FF14 ! Monde Louisoix sur le serveur Light! Merci";
        $suggestion->save();
    }
}
