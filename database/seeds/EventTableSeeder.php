<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event;
        $event->name = 'Test Event One';
        $event->user_id = 1;
        $event->date = Carbon::add(10)->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->save();

        $event = new Event;
        $event->name = 'Test Event One';
        $event->user_id = 1;
        $event->date = Carbon::add(10)->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->save();

        $event = new Event;
        $event->name = 'Test Event One';
        $event->user_id = 2;
        $event->date = Carbon::add(10)->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->save();

    }
}
