<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
