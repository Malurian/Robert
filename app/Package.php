<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'event_id', 'name', 'amount', 'quantity', 'description'
    ];
}
