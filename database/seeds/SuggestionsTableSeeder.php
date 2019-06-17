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
        $suggestion->user_id = 1;
        $suggestion->titre = "Titre du message";
        $suggestion->message = "Je suis un message. Bip bip Boop BooOp Bo0p !";
        $suggestion->save();
    }
}
