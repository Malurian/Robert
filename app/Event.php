<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name','user_id','date','address','map','description','image','default.jpg'
    ];
}
