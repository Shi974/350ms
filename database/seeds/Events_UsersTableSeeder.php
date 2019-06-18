<?php

use Illuminate\Database\Seeder;
use App\Event_user;
use App\Event;
use App\User;

class Events_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_user = new Event_user;
        $event_user->id = 1;
        $event_user->event_id = 1;
        $event_user->user_id = 2;
        $event_user->save();

        $event_user = new Event_user;
        $event_user->id = 2;
        $event_user->event_id = 2;
        $event_user->user_id = 4;
        $event_user->save();

        $event_user = new Event_user;
        $event_user->id = 3;
        $event_user->event_id = 1;
        $event_user->user_id = 3;
        $event_user->save();

        $event_user = new Event_user;
        $event_user->id = 4;
        $event_user->event_id = 3;
        $event_user->user_id = 2;
        $event_user->save();
    }
}
