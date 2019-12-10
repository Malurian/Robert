<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name','user_id','date','address','map','description','image','default.jpg', 'quantity', 'from_time', 'to_time'
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
