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
        $suggestion->message = "Je suis un message";
        $suggestion->save();
    }
}
