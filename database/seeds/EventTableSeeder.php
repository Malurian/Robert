<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon\Carbon;

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
        $event->date = Carbon::now()->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->amount = 49.99;
        $event->save();

        $event = new Event;
        $event->name = 'Test Event One';
        $event->user_id = 1;
        $event->date = Carbon::now()->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->amount = 99.99;
        $event->save();

        $event = new Event;
        $event->name = 'Test Event One';
        $event->user_id = 2;
        $event->date = Carbon::now()->format('Y-m-d H:i:s');
        $event->address = 'Online Event';
        $event->amount = 50;
        $event->save();

    }
}
