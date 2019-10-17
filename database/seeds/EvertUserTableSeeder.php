<?php

use Illuminate\Database\Seeder;
use App\EventUser;

class EvertUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_user = new EventUser;
        $event_user->event_id = 1;
        $event_user->user_id = 2;
        $event_user->save();

        $event_user = new EventUser;
        $event_user->event_id = 2;
        $event_user->user_id = 2;
        $event_user->save();

        $event_user = new EventUser;
        $event_user->event_id = 3;
        $event_user->user_id = 1;
        $event_user->save();
    }
}
